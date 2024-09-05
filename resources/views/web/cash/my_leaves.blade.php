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
         <h1 class="font-36 fw-bold text-uppercase text-purple">MY LEAVES
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


        <div class="col-12">
            <div class="row align-items-center text-center ">
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-3  mb-3 px-sm-0">
                  <span class="  text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                     bg-warning fw-bolder align-items-center  ">ANNUAL LEAVE BALANCE - 14 
                     - 15000</span>
               </div>
               <div class="col-lg-3  col-sm-6 mb-lg-0 mb-sm-3 mb-3">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                 bg-success fw-bolder align-items-center  "> LEAVE BALANCE - 7</span>
             </div>
             <div class="col-lg-3  col-sm-6 mb-lg-0 mb-sm-3  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                  bg-danger fw-bolder align-items-center  "> NO PAY COUNT - 5</span>
             </div>
             <div class="col-lg-3  col-sm-6 mb-lg-0 mb-sm-3  mb-3 px-sm-0 text-lg-end">
                <a class=" rounded-pill font-13 w-100 text-white rounded-3 py-2 px-3
                  bg-secondary fw-500 align-items-center " data-bs-toggle="modal" data-bs-target="#leaveRequest">
                   
                    <i class="fa fa-plus"></i>  Leave Request  
                  
                 </a>
                 <div class="modal fade" id="leaveRequest" data-bs-backdrop="static" tabindex="-1"
                  aria-labelledby="leaveRequest" aria-hidden="true">
                    <div class="modal-dialog text-start">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    Leave Request
                             </h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                             <form action="">
                                <div class="modal-body ">
                                   <div class="mb-2">
                                      <label class="form-label font-14 fw-bold text-purple  mb-0">DATE RANGE  </label>
                                     
                                

                                       <input type="date" class="form-control fw-500 rounded-3 border-dark font-13" id="exampleFormControlInput1"
                                        placeholder="name@example.com">


                                   </div>
                                   <div class="mb-2">
                                      <label class="form-label font-14 fw-bold text-purple  mb-0">LEAVE TYPE </label>
                                      <select class="form-select fw-500 rounded-3 border-dark font-13" 
                                      aria-label="Default select example">
                                         <option selected="">Select Leave Type</option>
                                         <option value="1">Casual</option>
                                         <option value="2">Mediacal</option>
                                      </select>
                                   </div>
                                   <div class="mb-2">
                                      <label class="form-label font-14 fw-bold text-purple  mb-0">REASON </label>
                                      <textarea class="form-control fw-500 rounded-3 border-dark font-13" rows="5"></textarea>
                                   </div>
                                </div>
                                <div class="text-center">
                                   <button type="button" class="btn text-uppercase font-12 
                                      text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Request</button>
                                </div>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>

             </div>
            </div>
         </div>
       <div class="col-12">
          <div class="table-responsive  ">
             <table id="myLeavesTbl" class="table table-striped table-hover table-bordered">
                <thead class="text-white gradient-background text-uppercase fw-light font-14">
                   <th>REQUESTED DATE</th>
                   <th>DAY</th>
                   <th>LEAVE TYPE</th>
                   <th>REASON</th>
                   <th>ADMIN REMARKS
                   </th>
                   <th>STATUS</th>
                   
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
                 
                  
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
 @endsection
