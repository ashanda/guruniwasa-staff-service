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
         <h1 class="font-36 fw-bold text-uppercase text-purple">CASH BALANCE

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
            <div class="row align-items-center text-center ">
                <div class="col-lg-3 col-sm-4 mb-lg-0 mb-sm-0  mb-3">
                  <span class="  text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                     bg-light-blue fw-bolder align-items-center  ">PETTY CASH AMOUNT
                     - 15000</span>
               </div>
               <div class="col-lg-3 col-sm-4 mb-lg-0 mb-sm-0  mb-3">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                 bg-light-blue fw-bolder align-items-center  ">CURRUNT BALANCE

                   - 150</span>
             </div>
             <div class="col-lg-3 col-sm-4 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                  bg-light-blue fw-bolder align-items-center  ">Petty Cash
                   Excess/Shortage</span>
             </div>

            </div>
         </div>
       <div class="col-12">
          <div class="table-responsive  ">
             <table id="cashBlanceTbl" class="table table-striped table-hover table-bordered">
                <thead class="text-white gradient-background text-uppercase fw-light font-14">
                   <th>DAY</th>
                   <th>TIME</th>
                   <th>CATEGORY</th>
                   <th>ITEM / SERVICE</th>
                   <th>CASH IN
                   </th>
                   <th>CASH
                    OUT</th>
                   <th>CURRENT
                    BALANCE</th>
                   <th>PROOF
                    DOCUMENT
                   </th>

                   <th>BALANCE
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
                    <td>
                        <button class="btn btn-primary fw-500 font-12 px-2 w-100 rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#viewProofDoc">View</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="viewProofDoc" tabindex="-1" aria-labelledby="exampleModalLabel">
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                        <img class="d-block w-100 " src="{{asset('themes/default/img/6.webp')}}" alt="Guru Niwasa LMS">

                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                    <td></td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
 @endsection
