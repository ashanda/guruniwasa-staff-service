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
         <h1 class="font-36 fw-bold text-uppercase text-purple">MY SALARY
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>

      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
        <a href="{{ route('web.salary.compare_salary') }}" 
        class=" text-center text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center  
         hvr-shrink"><i class="fa-solid fa-chart-pie"></i> Salary Compare</a>
    </div>
   </div>
</div>


<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row middle-hight">

        <div class="row justify-content-end">
            <div class="col-lg-3 col-sm-5 col-8 text-end pb-lg-0 pb-2">
               <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>
         </div>
       <div class="col-12">
          <div class="table-responsive  ">
             <table id="mySalaryTbl" class="table table-striped table-hover table-bordered">
                <thead class="text-white gradient-background text-uppercase fw-light font-14">
                   <th>MONTH</th>
                   <th>BASIC SALARY</th>
                   <th>FIXED
                    ALLOWNCE</th>
                   <th>ITEM SHOP
                </th>
                   <th>OTHER
                    ALLOWANCES
                   </th>
                   <th>STUDENT
                    COMMISION</th>
                   <th>OT</th>
                   <th>LEAVES
                   </th>

                   <th>SUBTOTAL
                   </th>

                   <th>EPF 8%
                </th>
                <th>SALARY
                    ADVANCE
                </th>
                <th>OTHER
                    DEDUCTIONS
                </th>
                <th>GRAND
                    TOTAL
                </th>
                   </tr>
                </thead>
                <tbody class="font-13 fw-500 align-items-center">
                   <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
 @endsection
