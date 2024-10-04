@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD FEES PAYMENT

         </h1>
         <p class="font-20 fw-500 text-purple">CLASS FEES

         </p>
      </div>
<div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
   <div class="row justify-content-end">
      <div class="col-lg-11">
         
            <select class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control"
               name="searchKey" id="search" aria-label="Search">
            </select>
      </div>
   </div>
</div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row align-items-center">
            <div class="col-lg-4 col-sm-5 ">
               <span class=" w-100 text-uppercase font-13 w-100 text-white rounded-pill py-2 px-3
                  bg-primary fw-500 align-items-center  ">LAST MONTH PAYMENT - 3000.00
                </span>
            </div>
            <div class="col-lg-8 pt-lg-0 pt-sm-3 pt-3">

               <div class="row py-4">
                     <div class="col-lg-8 col-sm-8 mx-auto">
                        <div class="card p-3">
                           <div class="row">
                              <div class="col-6">
                                 <p class="font-14 fw-bolder text-dark student-name"></p>
                              </div>
                              <div class="col-6">
                                 <p class="font-14 fw-bolder text-dark student-code"></p>
                              </div>
                              <div class="col-6">
                                 <p class="font-14 fw-bolder text-dark student-grade"></p>
                              </div>
                              <div class="col-6">
                                 <p class="font-14 fw-bolder text-dark student-phone"></p>
                              </div>
                              <div class="col-6 mx-auto pt-3 text-center">
                                  <a href="#" class="student-details-link w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center hvr-shrink">
                                    STUDENT DETAILS
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
      <div class="col-lg-6 col-sm-12">
         <div class="alert alert-primary" role="alert">
            <div class="text-center">
            </div>
            <div class="row pt-2">
               <div class="col-12">
                  <form action="{{ route('web.pay.class_fess') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                  <div class="row ">
                     
                   <div class="col-lg-6 mb-3">
                  <h3 class="font-14 pt-2 pb-3 fw-bold text-dark">Payment Method
                        </h3>
                        <select class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control" name="payment_method" required>
                            <option value="Bank">Bank</option>
                            <option value="Card">Card</option>
                            <option value="POS">POS</option>
                        </select>
                   </div>
                    <div class="col-lg-6 mb-3">
                  <h3 class="font-14 pt-2 pb-3 fw-bold text-dark">Month
                        </h3>
                        <select class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control" name="month" required>
                               <option value="1">JANUARY</option>
                              <option value="2">FEBRUARY</option>
                              <option value="3">MARCH</option>
                              <option value="4">APRIL</option>
                              <option value="5">MAY</option>
                              <option value="6">JUNE</option>
                              <option value="7">JULY</option>
                              <option value="8">AUGUST</option>
                              <option value="9">SEPTEMBER</option>
                              <option value="10">OCTOBER</option>
                              <option value="11">NOVEMBER</option>
                              <option value="12">DECEMBER</option>
             
                        </select>
                   </div>
                  </div>   
                  <div class="row mt-3">
                     <div class="col-lg-8 mb-3">
                        <h2 class="font-14 pt-2 pb-3 fw-bold text-dark">Subjects
                        </h2>
                        
                     </div>
                     <div class="col-lg-4 text-end">
                        <h3 class="font-14 pt-2 pb-3 fw-bold text-dark">AMOUNT
                        </h3>
                     </div>
                     
                     <div class="subjects-container row">
                        <!-- This section will be dynamically populated with subjects -->
                     </div>
                     
                     <div class="total-container">
                        <!-- This section will be dynamically populated with the total amount -->
                     </div>
                     <div class="payment-buttons-container">
                        <!-- Payment buttons will be dynamically inserted here -->
                     </div>
                     <div class="row">

                        
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="row justify-content-center pt-5">
            <div class="col-lg-8">
               <p class="font-14 fw-bolder text-purple text-center">
                  EDITORS NOTE; NEWEST PENDING PAYMENTS MUST COME TO THE TOP1
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script>
   $(document).ready(function() {
       $('#search').select2({
         placeholder: 'Select an option',
         allowClear: true,
         ajax: {
            url: '/search-students', // The route you created
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
               return {
                  results: data.items.map(function(item) {
                     return {
                        id: item.id,
                        text: item.text
                     };
                  })
               };
            }
         }
      });

$('#search').on('change', function () {
    var studentId = $(this).val(); // Get the selected student ID

    if (studentId) {
        // Make an AJAX request to fetch student details
        $.ajax({
            url: '/single-student-data/' + studentId, // Replace with your route
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                // Bind data to the student details section
                $('.student-name').text(data.full_name);
                $('.student-code').text(data.student_code);
                $('.student-grade').text(data.relatedData.grade.gname + ' - ' + data.medium);
                $('.student-phone').text('0' + data.username);
                // Update the student details link
                var studentDetailsUrl = '/student-details/' + data.id;
                $('.student-details-link').attr('href', studentDetailsUrl);
                
                // Update the student details link with the generated URL
                $('.student-details-link').attr('href', studentDetailsUrl);
                // Extract subject details
                var subjectDetails = data.subject_details;
                var totalAmount = 0;
                var subjectsHtml = '';

                subjectDetails.forEach(function (subjectDetail, index) {
                    var subjectName = subjectDetail.data.sname;
                    var fee = parseFloat(subjectDetail.data.fee);
                    var teacherName = subjectDetail.teacher.data ? subjectDetail.teacher.data.name : 'Unknown';
                    var medium = subjectDetail.data.class_type;

                    totalAmount += fee;

                    subjectsHtml += `
                        <div class="row mb-2 align-items-center">
                            <div class="col-1">
                                <input type="checkbox" class="subject-checkbox" id="subject-${index}" name="cartData[]" value='${JSON.stringify(subjectDetail.data)}' data-fee="${fee}">
                                <input type="hidden"  name="student_id" value="${data.id}">
                                </div>
                            <div class="col-7">
                                <p class="font-13 pb-1 fw-500 text-dark">${subjectName} | ${medium} Medium | ${teacherName}</p>
                            </div>
                            <div class="col-4 text-end">
                                <p class="font-13 pb-1 fw-500 text-dark">${fee.toFixed(2)}</p>
                            </div>
                        </div>`;
                });

                // Append the subjects to the desired element
                $('.subjects-container').html(subjectsHtml);

                // Add Payment History and Pay button once, outside the loop
                var paymentButtonsHtml = `
                    <div class="row mt-3">
                        <div class="col-lg-5 col-sm-4 col-6">
                            <a href="/fees/student-payment-history/${studentId}" class="text-center hvr-shrink bg-info fw-500 font-11 px-2 w-100 rounded-pill py-2 text-white">
                                PAYMENT HISTORY
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-6">
                            <button type="submit" class="btn btn-success fw-500 font-11 px-2 w-100 rounded-pill text-white">PAY</button>
                        </div>
                    </div>`;
                
                // Append the payment buttons to the desired container
                $('.payment-buttons-container').html(paymentButtonsHtml);

                // Update total and discount
                updateTotalAmount();

                // Listen for changes on checkboxes
                $('.subject-checkbox').on('change', function () {
                    updateTotalAmount();
                });
            },
            error: function (xhr, status, error) {
                console.log('Error fetching student details:', error);
            }
        });
    }

    // Function to update total amount and apply discount
    function updateTotalAmount() {
        var selectedCount = $('.subject-checkbox:checked').length;
        var totalAmount = 0;

        $('.subject-checkbox:checked').each(function () {
            totalAmount += parseFloat($(this).data('fee'));
        });

        var discount = 0;
        if (selectedCount >= 6) {
            discount = totalAmount * 0.20; // 20% discount
        }

        var grandTotal = totalAmount - discount;

        var totalHtml = `
            <div class="total-box text-end font-14 text-dark fw-500 bd-blue-100 p-3 rounded-3">
                <p>Total: ${totalAmount.toFixed(2)}</p>
                <p>Discount: -${discount.toFixed(2)}</p>
                <p><strong>Grand Total: ${grandTotal.toFixed(2)}</strong></p>
            </div>`;

        $('.total-container').html(totalHtml);
    }
});
   });


</script>
@endsection
