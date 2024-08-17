@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">VIEW ANALYTICS


         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight">
         <div class="col-12">

            <div class="row justify-content-center">
               <div class="col-lg-8 mx-auto">
                  <h5 class=" font-24 fw-bold text-start pb-3   text-purple pt-lg-0 pt-1">
                    ITEM SHOP STATS

                  </h5>
                  <form>
                     <div class="row">
                        <div class="col-lg-6 col-sm-6">
                           <div class="mb-2">
                              <label class="form-label font-14 fw-bold text-purple text-start mb-0">Payment Method
                              </label>
                              <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example">
                                 <option selected="">Select Month</option>
                                 <option value="1">January</option>
                                 <option value="2">February</option>
                                 <option value="3">March</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                           <label class="form-label font-14 fw-bold text-purple text-start mb-0">Payment CATEGORY
                           </label>
                           <div class="dropdown">
                              <button class="btn btn-white fw-500 rounded-3 border-dark dropdown-toggle w-100 text-start dropdown12" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              Select Options
                              </button>
                              <ul class="dropdown-menu px-2 w-100" aria-labelledby="dropdownMenuButton">
                                 <li class="dropdown-checkbox">
                                    <input class="form-check-input   " type="checkbox" value="" id="option1">
                                    <label class="form-check-label ms-2  font-13 fw-bolder text-purple" for="option1">
                                        DISPATCHED ITEMS
                                    </label>
                                 </li>
                                 <li class="dropdown-checkbox">
                                    <input class="form-check-input" type="checkbox" value="" id="option2">
                                    <label class="form-check-label ms-2  font-13 fw-bolder text-purple" for="option2">
                                        CANCELED ORDERS

                                    </label>
                                 </li>
                                 <li class="dropdown-checkbox">
                                    <input class="form-check-input" type="checkbox" value="" id="option3">
                                    <label class="form-check-label ms-2  font-13 fw-bolder text-purple" for="option3">
                                    BANK PAYMENTS
                                    </label>
                                 </li>
                                 <li class="dropdown-checkbox">
                                    <input class="form-check-input" type="checkbox" value="" id="option3">
                                    <label class="form-check-label ms-2  font-13 fw-bolder text-purple" for="option3">
                                        ALL
                                    </label>
                                 </li>
                                
                              </ul>
                           </div>
                        </div>
                     </div>
                     <button type="button" class="btn   text-white gradient-background-1 py-2 px-5 mt-4 text-start ">SUBMIT</button>
                  </form>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
@endsection
