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
         <h1 class="font-36 fw-bold text-uppercase text-purple">PENDING ORDERS (PICKUP)
         </h1>
         ITEM SHOP
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
         <p  class="w-auto text-center text-uppercase font-12
        text-white rounded-pill py-2 px-3 bg-secondary fw-500 align-items-center
         "> PENDING ORDERS

         <span class="badge badge-custom bg-white  text-dark ms-1 font-13">6</span>
        </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="pendingOrderPickUp" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                   
                  <th>NAME</th>
                  <th>Grade
                  </th>
                  <th>CUSTOMER
                    TYPE                  
                    </th>
                  <th>Contact
                    Numbers</th>
                  <th>ORDER DETAILS
                  </th>
 
                <th>STATUS
                </th>





                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td>01.01.2023</td>
                     <td>PRAMOD THILINA
                        <a class="btn btn-info fw-500 font-11 px-2 w-100 rounded-pill text-white"
                       href="">  DETAILS</a>
                     </td>
               
                     <td> </td>

                    <td>student
                        </td>
                        <td> </td>
                        <td>G6 EM SCIENCE TT BOOK - 1 </td>
                        
               

                     


                     <td>
                        <span class="btn btn-success font-11 px-3 fw-bolder rounded-pill  text-uppercase mb-2">READY</span>
                        <span class="btn btn-danger font-11  px-3 fw-bolder rounded-pill text-uppercase mb-2">CANCELED</span>
                        <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#errorDelete"> 
                           CHANGE</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="errorDelete"
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
