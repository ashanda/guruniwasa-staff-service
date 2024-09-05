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
         <h1 class="font-36 fw-bold text-uppercase text-purple">PAYMENT HISTORY
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
          
         <div class="table-responsive  ">
            <table id="feesCashTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>Month</th>
                  <th>Subject</th>
                  <th>Teacher</th>
                  <th>STUDENT
                    DETAILS</th> 
                  <th>PAYMENT Type</th>
                  <th>PAY AMOUNT</th>
                  <th>DISCOUNT</th>
                  <th>Approved By</th>
                  </tr>
               </thead>
               
              <tbody class="font-13 fw-500 align-items-center">
               
    @foreach ($payments as $paymentGroup)
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
               <ul>
               @foreach ($paymentGroup as $payment)
               <li>{{ $payment['subject']['data']['sname'] ?? 'N/A' }}</li>
               @endforeach
               </ul>
            </td>

            <!-- Student Details Button -->
            <td>
               <ul>
               @foreach ($paymentGroup as $payment)
               <li>{{ $payment['teacher']['data']['name'] ?? 'N/A' }}</li>
               @endforeach
               </ul>
            </td>

 
            <td>
               <ul>  
                  <li>Student Name : {{ $paymentGroup[0]['student']['data']['full_name'] }}</li>
                  <li>Student ID: {{ $paymentGroup[0]['student']['data']['student_code'] }}</li>
                  <li>Contact Num : {{ '0'.$paymentGroup[0]['student']['data']['username'] }}</li>
               </ul>
            
            </td>
            <td>
               {{ $paymentGroup[0]['payment_type'] ?? 'N/A' }}
            </td>
            <td>
               {{ number_format($finalPayableAmount, 2) }}
            </td>
            <td>
               {{ number_format($totalDiscount, 2) }}
            </td>
            <td>
               {{ $paymentGroup[0]['approved_by'] ?? 'N/A' }} - {{ $paymentGroup[0]['approved_at'] ?? 'N/A' }} <br>
               @if($paymentGroup[0]['status'] == "Approved")
               <span class="text-success">{{ $paymentGroup[0]['status'] ?? 'N/A' }}</span>
               @else
               <span class="text-danger">{{ $paymentGroup[0]['status'] ?? 'N/A' }}</span>
               @endif
               
            </td>
            <!-- Actions Dropdown -->
            
        </tr>
    @endforeach
</tbody>




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