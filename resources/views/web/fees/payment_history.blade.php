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
         <h1 class="font-36 fw-bold text-uppercase text-purple">PAYMENT HISTORY

         </h1>
         <p class="font-20 fw-500 text-purple">(Student Name) (Grade) (Phone Number)
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
        <a href=" " 
        class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 text-center  
         hvr-shrink">Student Details</a>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
       
         <div class="table-responsive  ">
            <table id="PaymentHistoryTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>Payment Date</th>
                  <th>Month</th>
                  <th>Subject
                    </th>
                  <th>Teacher</th>
                  <th>Payment Type</th>
                  <th>Amount</th>
                  
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                    <td> #</td>
                    <td># </td>
                        <td># </td>
                        <td># </td>
                        <td> #</td>
                        <td># </td>
                            </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection