@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">

         <h1 class="font-30 fw-bold text-uppercase text-purple">MY ATTENDANCE
         </h1>
         <p class="font-20 fw-500 text-purple">JANUARY
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row justify-content-end">

            <div class="col-lg-3 col-sm-5 col-8 text-end pb-3">
                <a href="{{ route('web.salary.my_leaves') }}" class="hvr-shrink   bg-danger text-white py-2  
                font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">REQUEST LEAVE
                </a>

            </div>

            <div class="col-lg-2  col-sm-5 col-8  pb-3">

            <a class="" data-bs-toggle="modal" data-bs-target="#addAttendance">
                <ul class="d-flex justify-content-center font-12 text-white
                   py-2 px-3 bg-dark fw-bolder align-items-center  rounded-pill">
                   <li><i class="fa fa-plus"></i></li>
                   <li class="
                    ps-2"> My Attendance</li>
                </ul>
             </a>
             <div class="modal fade" id="addAttendance" data-bs-backdrop="static"
             tabindex="-1" aria-labelledby="addAttendance" aria-hidden="true" >
                <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                         <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                            My Attendance
                         </h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <form action="">
                            <div class="modal-body ">
                               <div class="mb-2">
                                  <label class="form-label font-14 fw-bold text-purple  mb-0">Date & Time </label>
                                  <input type="datetime-local" class="form-control font-14  fw-500 rounded-3 border-dark">
                               </div>

                               <div class="mb-2">
                                  <label class="form-label font-14 fw-bold text-purple  mb-0">REMARK </label>
                                  <textarea class="form-control fw-500 rounded-3 border-dark"   rows="5"></textarea>
                               </div>
                            </div>
                            <div class="text-center">
                               <button type="button" class="btn text-uppercase font-12
                                  text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">SUBMIT</button>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
             </div>

            </div>

         </div>
         <div class="table-responsive  ">
            <table id="attendanceTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>DAY</th>
                  <th>IN</th>
                  <th>OUT</th>
                  <th>WORKING
                    HOURS</th>
                    <th>OT</th>
                    <th>DEDUCTS</th>
                    <th>STATUS</th>
                    <th>REMARKS</th>
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
                     <td>NORMAL DAY
                    </td>
                     <td></td>
                     <td></td>
                  </tr>
                  <tr>
                    <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>LEAVE DAY
                    </td>
                     <td></td>
                     <td></td>
                  </tr>
                  <tr>
                    <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>HOLIDAY
                    </td>
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
