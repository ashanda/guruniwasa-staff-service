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
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS FEES - CARD PAYMENTS
         </h1>
         <p class="font-20 fw-500 text-purple">JANUARY - 2024
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
            <div class="col-lg-3 col-sm-5 col-8 text-end pb-lg-0 pb-2">
               <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>
         </div>
         <div class="table-responsive  ">
            <table id="feesCardPaymentTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>TIME</th>
                  <th>CARD
                    TYPE</th>
                  <th>STUDENT NAME</th>
                  <th>ID</th>
                  <th>STUDENT
                    DETAILS</th>
                  <th>GRADE</th>
                  <th>PAYMENT DETAILS</th>
                  <th>DATA
                    ENTERED BY</th>
                  <th>DELETE (NEED
                    APPROVAL)</th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                      <td>01.01.2023</td>
                      <td>2.54
                        pm</td>
                        <td> </td>
                        <td>Ashen Silva </td>
                        <td>GNI 0001</td>
                        <td><a href=" " class=" w-100 text-uppercase font-12
                             text-white rounded-pill py-2 px-3 bg-primary fw-500 text-center   hvr-shrink">VIEW DETAILS </a></td>
                 
                             <td>Grade 6</td> 
                             <td>5600.00<br>
                                <a href=" " class=" w-100 text-uppercase font-12
                                text-white rounded-pill py-2 px-3 bg-primary fw-500 text-center  hvr-shrink">VIEW DETAILS </a> 
                            </td> 

                            <td>PRAMOD THILINA</td>
                            <td>
                                <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
                                data-bs-toggle="modal" data-bs-target="#cardPaymentDelete">DELETE</button>
                             <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="cardPaymentDelete"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                <div class="modal-dialog modal-dialog-centered ">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body ">
                                         <div class="row">
                                           <div class="col-12">
                                             <p class=" fw-500 font-14 rounded-3 text-dark pb-3">
                                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                             </p>
                                             <button type="button" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                                 Submit</button>
                                           </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                            </td>

                            </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection