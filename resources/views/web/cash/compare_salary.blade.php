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
         <h1 class="font-36 fw-bold text-uppercase text-purple">SALARY COMPARE

         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>

      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
        <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
        <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
    </div>
   </div>
</div>


<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row middle-hight">

     
       <div class="col-lg-10 mx-auto">
        <div>
            <canvas id="salaryCompareChart"></canvas>
          </div>
       </div>
    </div>
 </div>
 @endsection
