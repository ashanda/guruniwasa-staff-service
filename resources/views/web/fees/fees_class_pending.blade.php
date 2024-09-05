@extends('web.layouts.app')
@section('content')

<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS FEES PENDING
         </h1>
      </div>
      
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
         <div class="row justify-content-end">
            <div class="col-lg-11">
               <form action=" " method="get">
                  <input class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control "
                     type="search" name="searchKey" id="search" placeholder="Search" aria-label="Search"
                     style=" outline: none;">
                  <button type="submit " class="border-0 serch-btn">
                  <i class="fa-solid fa-magnifying-glass fs-4"></i>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row align-items-center mb-3">
            <div class="col-lg-4 col-sm-5 ">
               <span class=" w-100 text-uppercase font-13 w-100 text-white rounded-pill py-2 px-3
                  bg-primary fw-500 align-items-center  ">PENDING COUNT - {{ $pending_payments_count }}</span>
            </div>
         </div>   
         <div class="table-responsive  ">
            <table id="feesCashTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>Month</th>
                  <th>SLIP</th>
                  <th>STUDENT
                    DETAILS</th> 
                  <th>PAYMENT DETAILS</th>
                  <th>PAY AMOUNT</th>
                  <th>DISCOUNT</th>
                  <th>Action</th>
                  </tr>
               </thead>
               
              <tbody class="font-13 fw-500 align-items-center">
               
    @foreach ($pending_payments as $paymentGroup)
               @php
                    // Initialize variables for summing up the total fees, original subject fees, and discount
                    $totalFees = 0; // What has been paid
                    $originalSubjectFees = 0; // The original subject fees before discount

                    // Calculate the total fees and original subject fees
                    foreach ($paymentGroup as $payment) {
                        $totalFees += $payment['fee'] ?? 0; // Total paid fees

                        // Summing up the original subject fees (before any discount)
                        $originalSubjectFees += $payment['subject']['data']['fee'] ?? 0;
                    }

                    // Calculate the discount based on the difference between original and total fees paid
                    $totalDiscount = $originalSubjectFees - $totalFees;

                    // If total discount is negative, set it to 0
                    $totalDiscount = max(0, $totalDiscount);

                    // Calculate the final payable amount (fees already paid)
                    $finalPayableAmount = $totalFees;
                @endphp
        <tr>
            <!-- Date Column -->
            <td>{{ $paymentGroup[0]['dateTime'] ?? 'N/A' }}</td>
            
            <!-- Month Column -->
            <td>
                <span class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                    {{ \Carbon\Carbon::parse($paymentGroup[0]['pay_month'])->format('F') ?? 'N/A' }}
                </span>
            </td>

            <!-- View Slip Column -->
            <td>
                <a href="{{ asset($paymentGroup[0]['transferSlip'] ?? '') }}" class="btn btn-secondary fw-500 font-11 px-2 w-100 rounded-pill text-white" target="_blank">
                    VIEW SLIP
                </a>
            </td>

            <!-- Student Details Button -->
            <td>
                <button class="btn btn-primary fw-500 font-11 px-2 w-100 rounded-pill text-white text-capitalcase" 
                        data-bs-toggle="modal" 
                        data-bs-target="#studentDetailsModal" 
                        data-student="{{ $paymentGroup[0]['student']['data']['full_name'] }}"
                        data-id="{{ $paymentGroup[0]['student']['data']['student_code'] }}"
                        data-contact="{{ '0'.$paymentGroup[0]['student']['data']['username'] }}"
                        >
                        
                    Student  Details
                </button>
            </td>

            <!-- Payment Details Button -->
            @php
        // Capture the bank and payment type just once (for the first payment)
        $allPaymentDetails = "<p>Bank: " . htmlspecialchars($paymentGroup[0]['bank'] ?? 'N/A') . "</p>";
        $allPaymentDetails .= "<p>Payment Type: " . htmlspecialchars($paymentGroup[0]['payment_type'] ?? 'N/A') . "</p>";
        $allPaymentDetails .= "<hr>"; // Separator after Bank and Payment Type

        // Loop through the rest of the paymentGroup to capture the other details
        foreach ($paymentGroup as $payment) {
            $allPaymentDetails .= "<p>Subject: " . htmlspecialchars($payment['subject']['data']['sname'] ?? 'N/A') . "</p>";
            $allPaymentDetails .= "<p>Teacher: " . htmlspecialchars($payment['teacher']['data']['name'] ?? 'N/A') . "</p>";
            $allPaymentDetails .= "<p>Grade: " . htmlspecialchars($payment['grade']['grade']['gname'] ?? 'N/A') . "</p>";
            $allPaymentDetails .= "<p>Subject Fee: " . htmlspecialchars($payment['fee'] ?? 'N/A') . "</p>";
            $allPaymentDetails .= "<hr>"; // Separator between each payment detail
        }
    @endphp
            <td>
            <!-- Button to open modal and pass concatenated data dynamically -->
            <button class="btn btn-primary fw-500 font-11 px-2 w-100 rounded-pill text-white text-capitalcase" 
                     data-bs-toggle="modal" 
                     data-bs-target="#paymentDetailsModal" 
                     data-details="{{ $allPaymentDetails }}">
               Payment Details
            </button>
            </td>
            <td>
               {{ number_format($finalPayableAmount, 2) }}
            </td>
            <td>
               {{ number_format($totalDiscount, 2) }}
            </td>
            <!-- Actions Dropdown -->
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle fw-500 font-11 px-2 w-100 rounded-pill text-white"
                            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu w-100 p-2" aria-labelledby="dropdownMenuButton" style="min-width: 200px;">
                        <!-- Approve Button -->
                        <li class="mb-2">
                           <form action="{{ route('approve') }}" method="POST">
                                 @csrf
                                 <input type="hidden" name="id" value="{{ $paymentGroup[0]['payment_id'] }}">
                                 <input type="hidden" name="status" value="{{ 'Approved' }}">
                                 <button type="submit" class="btn btn-success w-100 fw-500 font-11 rounded-pill text-white">
                                    APPROVE
                                 </button>
                           </form>
                        </li>

                        <!-- Reject Button -->
                        <li class="mb-2">
                           <form action="{{ route('reject') }}" method="POST">
                                 @csrf
                                  <input type="hidden" name="id" value="{{ $paymentGroup[0]['payment_id'] }}">
                                  <input type="hidden" name="status" value="{{ 'Rejected' }}">
                                 <button type="submit" class="btn btn-danger w-100 fw-500 font-11 rounded-pill text-white">
                                    REJECT
                                 </button>
                           </form>
                        </li>

                        <!-- Add Remark Button -->
                        <li class="mb-2">
                           <form action="{{ route('addRemark') }}" method="POST">
                                 @csrf
                                 <input type="hidden" name="id" value="{{ $paymentGroup[0]['payment_id'] }}">
                                 <button type="submit" class="btn btn-secondary w-100 fw-500 font-11 rounded-pill text-white">
                                    Add Remark
                                 </button>
                           </form>
                        </li>

                        <!-- Payment History Button (Using a GET request) -->
                        <li>
                           <a href="{{ route('paymentHistory') }}" class="btn bg-info w-100 fw-500 font-11 rounded-pill text-white">
                                 PAYMENT HISTORY
                           </a>
                        </li>
                     </ul>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>

<!-- Student Details Modal -->
<div class="modal fade" id="studentDetailsModal" tabindex="-1" aria-labelledby="studentDetailsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentDetailsLabel">Student Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="studentName">Student Name: </p>
                <p id="studentID">Student ID: </p>
                <p id="studentContact">Student Contact: </p>
                <!-- Other student details can be displayed here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Payment Details Modal -->
<div class="modal fade" id="paymentDetailsModal" tabindex="-1" aria-labelledby="paymentDetailsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentDetailsLabel">Payment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <pre id="allPaymentDetails">Payment Details will appear here...</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

            </table>
         </div>
      </div>
   </div>
</div>

@endsection

@section('scripts')
<script>
    // For Student Details Modal
    var studentModal = document.getElementById('studentDetailsModal')
    studentModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var studentName = button.getAttribute('data-student')
        var studentID = button.getAttribute('data-id')
        var studentContact = button.getAttribute('data-contact')

        var modalBodyName = studentModal.querySelector('.modal-body #studentName')
        var modalBodyID = studentModal.querySelector('.modal-body #studentID')
        var modalBodyContact = studentModal.querySelector('.modal-body #studentContact')

        modalBodyName.textContent = 'Student Name: ' + studentName
        modalBodyID.textContent = 'Student ID: ' + studentID
        modalBodyContact.textContent = 'Contact: ' + studentContact
    })

      var paymentModal = document.getElementById('paymentDetailsModal');
      paymentModal.addEventListener('show.bs.modal', function (event) {
         // Button that triggered the modal
         var button = event.relatedTarget;

         // Extract the payment details from data-* attribute
         var paymentDetails = button.getAttribute('data-details');

         // Find the modal body where you want to display the details
         var modalBody = paymentModal.querySelector('.modal-body #allPaymentDetails');

         // Insert the HTML content into the modal (use innerHTML instead of textContent to interpret HTML)
         modalBody.innerHTML = paymentDetails;
      });
</script>
@endsection