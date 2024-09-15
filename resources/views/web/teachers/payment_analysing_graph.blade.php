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
         <h1 class="font-36 fw-bold text-uppercase text-purple">GRAPH VIEW
         </h1>
          
         <p class="font-20 fw-500 text-purple">ABHIMAN WITHAKSHANA
         </p>
      </div>

      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
 
    </div>
   </div>
</div>


<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row middle-hight">

     
       <div class="col-lg-10 mx-auto">
        <div>
            <canvas id="paymentGraph"></canvas>
          </div>
       </div>
    </div>
 </div>
 @endsection
