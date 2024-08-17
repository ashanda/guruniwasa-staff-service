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
         <h1 class="font-36 fw-bold text-uppercase text-purple">INACTIVE STUDENT DETAILS
         </h1>
         <p class="font-17 fw-500 text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
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
         <div class="table-responsive  ">
            <table id="inactiveStudents" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>NAME</th>
                  <th>STUDENT PHOTO
                  </th>
                  <th>PHONE NUMBER
                  </th>
                  <th>PARENT PHONE
                     NUMBER
                  </th>
                  <th>PAYMENT
                     HISTORY
                  </th>
                  <th>ACCOUNT TYPE
                  </th>
                  <th>Remarks
                  </th>
                  <th>Followed By
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td> LITHULI VIRUDINI</td>
                     <td>
                        <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                           alt="Guru Niwasa LMS">
                        <button class="btn btn-info fw-500 font-11 px-2 w-100 rounded-pill text-white mt-2"
                           data-bs-toggle="modal" data-bs-target="#viewPhoto">
                        View</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="viewPhoto"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-lg-12 text-center mx-auto">
                                          <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                                             alt="Guru Niwasa LMS">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td> </td>
                     <td> </td>
                     <td>
                        <a href="{{ route('web.fees.payment_history') }}" class=" text-white
                           font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                           align-items-center   hvr-shrink">View
                        </a>
                     </td>
                     <td> NORMAL
                     </td>
                     <td>Extra activities
                     </td>
                     <td>
                        Thilina
                        <button class="btn btn-success fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           >
                        SUBMIT</button>
                        <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#inactiveEdit">
                        EDIT</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="inactiveEdit"
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
                  <tr>
                    <td> LITHULI VIRUDINI</td>
                    <td>
                       <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                          alt="Guru Niwasa LMS">
                       <button class="btn btn-info fw-500 font-11 px-2 w-100 rounded-pill text-white mt-2"
                          data-bs-toggle="modal" data-bs-target="#viewPhoto">
                       View</button>
                       <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="viewPhoto"
                          tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                          <div class="modal-dialog modal-dialog-centered ">
                             <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
                                   <div class="row">
                                      <div class="col-lg-12 text-center mx-auto">
                                         <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                                            alt="Guru Niwasa LMS">
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </td>
                    <td> </td>
                    <td> </td>
                    <td>
                       <a href="{{ route('web.fees.payment_history') }}" class=" text-white
                          font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                          align-items-center   hvr-shrink">View
                       </a>
                    </td>
                    <td> NORMAL
                    </td>
                    <td>Extra activities
                    </td>
                    <td>
                       Thilina
                       <button class="btn btn-success fw-500 font-11 px-2 w-100 rounded-pill text-white"
                          >
                       SUBMIT</button>
                       <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                          data-bs-toggle="modal" data-bs-target="#inactiveEdit">
                       EDIT</button>
                       <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="inactiveEdit"
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
