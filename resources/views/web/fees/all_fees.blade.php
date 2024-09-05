@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">FEES
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight">
         <div class="col-12">
            <div class="row justify-content-center mb-5">
               <div class="col-lg-3 col-sm-6 col-12 text-center ">
                  <a href="{{ route('web.fees.class_pending') }}" class="text-white  bg-warning font-14 fw-500 w-100  rounded-pill px-3 py-3 me-2 hvr-shrink">CLASS FEES PENDING
                  <span class="badge badge-custom bg-dark ms-1 font-13">{{ $pending_payments_count }}</span></a>
               </div>
               <div class="col-lg-3 col-sm-6  col-12 text-center pt-lg-0 pt-sm-0 pt-3">
                  <a href="{{ route('web.fees.class_fess') }}" class="text-white bg-primary font-14 fw-500 w-100  rounded-pill px-3 py-3 hvr-shrink">ADD FEES PAYMENT</a>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-8 mx-auto">
                  <h5 class=" font-24 fw-bold text-start pb-3   text-purple pt-lg-0 pt-1">
                     CLASS FEE HISTORY
                  </h5>
                  <form action="{{ route('web.fees.class_fess') }}" method="POST">
                     @csrf
                     <div class="row">
                        <!-- Payment Month Selection -->
                        <div class="col-lg-6 col-sm-6">
                              <div class="mb-2">
                                 <label class="form-label font-14 fw-bold text-purple text-start mb-0">Payment Month</label>
                                 <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example" name="month">
                                    <option selected="">Select Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                 </select>
                              </div>
                        </div>

                        <!-- Payment Method Multi-Select -->
                        <div class="col-lg-6 col-sm-6">
                              <label class="form-label font-14 fw-bold text-purple text-start mb-0">Payment Method</label>
                              <div class="dropdown">
                                 <button class="btn btn-white fw-500 rounded-3 border-dark dropdown-toggle w-100 text-start dropdown12" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Options
                                 </button>
                                 <ul class="dropdown-menu px-2 w-100" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-checkbox">
                                          <input class="form-check-input" type="checkbox" value="Cash" id="option1" name="payment_method[]">
                                          <label class="form-check-label ms-2 font-13 fw-bolder text-purple" for="option1">CASH PAYMENTS</label>
                                    </li>
                                    <li class="dropdown-checkbox">
                                          <input class="form-check-input" type="checkbox" value="Pos" id="option2" name="payment_method[]">
                                          <label class="form-check-label ms-2 font-13 fw-bolder text-purple" for="option2">POS PAYMENTS</label>
                                    </li>
                                    <li class="dropdown-checkbox">
                                          <input class="form-check-input" type="checkbox" value="Bank" id="option3" name="payment_method[]">
                                          <label class="form-check-label ms-2 font-13 fw-bolder text-purple" for="option3">BANK PAYMENTS</label>
                                    </li>
                                    <li class="dropdown-checkbox">
                                          <input class="form-check-input" type="checkbox" value="Card" id="option4" name="payment_method[]">
                                          <label class="form-check-label ms-2 font-13 fw-bolder text-purple" for="option4">CARD PAYMENTS</label>
                                    </li>
                                    <li class="dropdown-checkbox">
                                          <input class="form-check-input" type="checkbox" value="OnlineErrors" id="option5" name="payment_method[]">
                                          <label class="form-check-label ms-2 font-13 fw-bolder text-purple" for="option5">ONLINE PAYMENT ERRORS</label>
                                    </li>
                                    <li class="dropdown-checkbox">
                                          <input class="form-check-input" type="checkbox" value="Rejected" id="option6" name="payment_method[]">
                                          <label class="form-check-label ms-2 font-13 fw-bolder text-danger" for="option6">REJECTED PAYMENTS</label>
                                    </li>
                                 </ul>
                              </div>
                        </div>
                     </div>

                     <!-- Submit Button -->
                     <button type="submit" class="btn text-white gradient-background-1 py-2 px-5 mt-4 text-start">SUBMIT</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="row py-5">
            <div class="col-lg-3 text-center pb-2">
               <a href="{{ route('web.fees.class_fess_cash') }}" 
                  class="text-white bg-primary font-14 fw-500 w-100  rounded-pill px-3 py-2 hvr-shrink">cash</a>
            </div>
            <div class="col-lg-3 text-center pb-2">
               <a href="{{ route('web.fees.class_fess_Pos') }}" 
                  class="text-white bg-primary font-14 fw-500 w-100  rounded-pill px-3 py-2 hvr-shrink">pos</a>
            </div>
            <div class="col-lg-3 text-center pb-2">
               <a href="{{ route('web.fees.class_fees_monthly_card_payment') }}" 
                  class="text-white bg-primary font-14 fw-500 w-100  rounded-pill px-3 py-2 hvr-shrink">card payment</a>
            </div>
            <div class="col-lg-3 text-center pb-2">
               <a href="{{ route('web.fees.class_fess_error_payment') }}" 
                  class="text-white bg-primary font-14 fw-500 w-100  rounded-pill px-3 py-2 hvr-shrink">error payment</a>
            </div>
            <div class="col-lg-3 text-center pb-2">
               <a href="{{ route('web.fees.class_fees_monthly_bank_payment') }}" 
                  class="text-white bg-primary font-14 fw-500 w-100  rounded-pill px-3 py-2 hvr-shrink">bank payment</a>
            </div>
            <div class="col-lg-3 text-center pb-2">
               <a href="{{ route('web.fees.payment_history') }}" 
                  class="text-white bg-primary font-14 fw-500 w-100  rounded-pill px-3 py-2 hvr-shrink">  payment history</a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection