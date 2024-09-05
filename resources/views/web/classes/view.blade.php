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
         <h1 class="font-36 fw-bold text-uppercase text-purple">TODAY LIVE CLASSES
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>
   </div>
</div> 


<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row middle-hight">
       <div class="col-12">
          <div class="table-responsive  ">
             <table id="liveClass" class="table table-striped table-hover table-bordered">
                <thead class="text-white gradient-background text-uppercase fw-light font-14">
                   <th>DAY</th>
                   <th>GRADE</th>
                   <th>SUBJECT</th>
                   <th>TEACHER
                    NAME</th>
                   <th>ZOOM LINK
                   </th>
                   <th>PASSWORD</th>
                   <th>STATUS</th>
                   <th>START
                   </th>
                  
                   <th>END
                   </th>
                   </tr>
                </thead>
                <tbody class="font-13 fw-500 align-items-center">
                   <tr>
                      <td>MONDAY</td>
                      <td>GRADE 6
                      </td>
                      <td>SCIENCE</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>ONGOING</td>
                      <td>6.00 </td>
                      <td>8.00 </td>
                     
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
 @endsection