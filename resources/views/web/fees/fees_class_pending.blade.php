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
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS FEES PENDING
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
         <div class="row justify-content-end">
            <div class="col-lg-11">
               <form action=" " method="get">
                  <input class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control "
                     type="search" name="searchKey" id="search" placeholder="Search" aria-label="Search"
                     style=" outline: none;">
                  <button type="submit " class="border-0 serch-btn">
                  <i class="fa-solid fa-magnifying-glass fs-4"></i>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row align-items-center">
            <div class="col-lg-4 col-sm-5 ">
               <span class=" w-100 text-uppercase font-13 w-100 text-white rounded-pill py-2 px-3
                  bg-primary fw-500 align-items-center  ">PENDING COUNT - 150</span>
            </div>
            <div class="col-lg-8 pt-lg-0 pt-sm-3 pt-3">
               <form action="">
                  <div class="row">
                     <div class="col-lg-5 col-sm-5 col-6">
                        <select
                           class="form-select form-select-lg border border-info rounded-pill font-15 fw-500 text-dark py-2 "
                           aria-label=".form-select-lg example">
                           <option selected="">Select Grade</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col-lg-5 col-sm-5 col-6">
                        <select
                           class="form-select form-select-lg border border-info rounded-pill font-15 fw-500 text-dark py-2 "
                           aria-label=".form-select-lg example">
                           <option selected="">Select Subject</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col-lg-2 col-sm-2 col-6 pt-lg-0 pt-sm-0 pt-3">
                        <button type="submit" class="btn w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3
                           bg-success fw-bolder align-items-center ">Submit</button>
                     </div>
                  </div>
               </form>
               <div class="row py-4">
                  <div class="col-lg-8 col-sm-8 mx-auto">
                     <div class="card p-3">
                        <div class="row">
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">SUNALI PERERA</p>
                           </div>
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">GNI 2244</p>
                           </div>
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">GRADE 6 - ENGLISH MEDIUM</p>
                           </div>
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">077 287 9970 </p>
                           </div>
                           <div class="col-6 mx-auto pt-3 text-center">
                              <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-14 text-white
                                 rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">STUDENT DETAILS
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-6 col-sm-12">
         <div class="alert alert-primary" role="alert">
            <div class="text-center">
               <span class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill ">
               FEBRUARY</span>
            </div>
            <div class="row pt-2">
               <div class="col-12">
                  <h2 class="font-17 pt-2 pb-3 fw-bold text-purple">PENDING PAYMENT DETAILS
                  </h2>
                  <div class="row">
                     <div class="col-lg-8">
                        <h3 class="font-14 pt-2 pb-3 fw-bold text-dark">Payment Method - Bank Payment
                        </h3>
                     </div>
                     <div class="col-lg-4 text-end">
                        <h3 class="font-14 pt-2 pb-3 fw-bold text-dark">AMOUNT
                        </h3>
                     </div>
                     <div class="col-8">
                        <p class="font-13  pb-1  fw-500 text-dark">Science Theory | English Medium | Abhiman Sir
                        </p>
                     </div>
                     <div class="col-4 text-end">
                        <p class="font-13 pb-1 fw-500 ext-dark">1,200.00
                        </p>
                     </div>
                     <div class="col-8">
                        <p class="font-13  pb-1  fw-500 text-dark">Science Theory | English Medium | Abhiman Sir
                        </p>
                     </div>
                     <div class="col-4 text-end">
                        <p class="font-13 pb-1 fw-500 text-dark">1,200.00
                        </p>
                     </div>
                     <div class="total-box text-end fopnt-14 text-dark fw-500 bd-blue-100 p-3 rounded-3">
                        <p>Total: 3600.00</p>
                        <p>Discount: -600.00</p>
                        <p><strong>Grand Total: 3300.00</strong></p>
                     </div>


                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-6">
                           <button class="btn btn-secondary fw-500 font-11 px-2 w-100 rounded-pill text-white"
                              data-bs-toggle="modal" data-bs-target="#viewSlip">VIEW SLIP </button>
                           <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="viewSlip"
                              tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center ">
                                       <div class="row">
                                          <div class="col-lg-6 mx-auto">
                                             <img class="d-block w-100 " src="{{asset('themes/default/img/6.webp')}}"
                                                alt="Guru Niwasa LMS">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-lg-5 col-sm-4 col-6">
                            <a href="" class="text-center hvr-shrink bg-info fw-500 font-11 px-2 w-100 rounded-pill py-2 text-white"
                              >PAYMENT
                              HISTORY
                              </a>

                         </div>

                         <div class="col-lg-3 col-sm-4 col-6">
                            <button class="btn btn-secondary fw-500 font-11 px-2 w-100 rounded-pill text-white"
                               data-bs-toggle="modal" data-bs-target="#addRemark">Add Remark</button>
                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="addRemark"
                               tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                               <div class="modal-dialog modal-dialog-centered ">
                                  <div class="modal-content">
                                     <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <div class="modal-body ">
                                        <div class="row">
                                           <div class="col-lg-8 mx-auto">
                                             <form action="">
                                                <div class="mb-3">
                                                    <label class="form-label font-14 fw-bold text-purple  mb-0">Remark</label>
                                                    <textarea class="form-control fw-500 rounded-3 border-dark"   rows="5"></textarea>
                                                  </div>
                                                  <button type="button" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                                   Submit</button>
                                             </form>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>

                         <div class="col-lg-3 col-sm-4 col-6">
                            <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
                               data-bs-toggle="modal" data-bs-target="#pendingClassReject">REJECT</button>
                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pendingClassReject"
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
                         </div>

                         <div class="col-lg-3 col-sm-4 col-6">
                            <button class="btn btn-success fw-500 font-11 px-2 w-100 rounded-pill text-white"
                               data-bs-toggle="modal" data-bs-target="#pendingClassApprove">APPROVE</button>
                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pendingClassApprove"
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
                         </div>


                     </div>
                     <div class="row">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<div class="col-12">
    <div class="row justify-content-center pt-5">



















        <div class="col-lg-8">
            <p class="font-14 fw-bolder text-purple text-center">
                EDITORS NOTE; NEWEST PENDING PAYMENTS MUST COME TO THE TOP            </p>
        </div>

              </div>
</div>


   </div>
</div>
@endsection
