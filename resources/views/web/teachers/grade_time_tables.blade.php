@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">GRADEWISE TIME TABLES
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
<div class="row middle-hight">
   <div class="col-lg-8 mx-auto">
      <div class="table-responsive">
         <table id="gradeTimeTbl" class="table table-striped table-hover table-bordered">
            <thead class="text-white gradient-background text-uppercase fw-light font-14">
               <tr>
                  <th >Grade</th>
                  <th >Medium</th>
                  <th >UPLOAD</th>
               </tr>
            </thead>
            <tbody class="font-14 align-items-center fw-500">



               <tr>
                  <td rowspan="2"><strong>06</strong></td>
                  <td>ENGLISH MEDIUM</td>
                  <td>
                    <a class="w-100" data-bs-toggle="modal" data-bs-target="#uploadTimeTbl">
                        <ul
                           class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
                           <li><i class="fa-solid fa-upload"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Upload </li>
                        </ul>
                     </a>
                     <!-- Modal -->
                     <div class="modal fade" id="uploadTimeTbl" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                    id="staticBackdropLabel">Upload Time Table</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body ">
                                       <div class="mb-3">
                                          <input class="form-control font-14 fw-500 text-dark"
                                             type="file" id="formFileMultiple" multiple="">
                                       </div>
                                    </div>
                                    <button type="button"
                                       class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500   text-white hvr-shrink ">Submit</button>
                              </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </td>
              </tr>
              <tr>
                  <td>SINHALA MEDIUM</td>
                  <td>
                     <a class=" " data-bs-toggle="modal" data-bs-target="#viewTimeTbl">
                        <ul
                           class="d-flex justify-content-center font-13
                            text-white my-3 py-2 px-3 bg-info fw-500 align-items-center  rounded-pill">
                           <li><i class="fa-solid fa-eye"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> View </li>
                        </ul>
                     </a>
                     <!-- Modal -->
                     <div class="modal fade" id="viewTimeTbl" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                    id="staticBackdropLabel">View Time Table</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-12">
                                       <img class="d-block w-100 mx-auto  "
                                          src="{{asset('themes/default/img/6.webp')}}" alt="Guru Niwasa LMS">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                  </td>
              </tr>
              <tr>
                  <td rowspan="2"><strong>07</strong></td>
                  <td>ENGLISH MEDIUM</td>
                  <td>

                  </td>
              </tr>
              <tr>
                  <td>SINHALA MEDIUM</td>
                  <td>
                    <a class="w-100" data-bs-toggle="modal" data-bs-target="#editTimeTbl">
                        <ul
                           class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-warning fw-500 align-items-center  rounded-pill">
                           <li><i class="fa-solid fa-upload"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Edit </li>
                        </ul>
                     </a>
                     <!-- Modal -->
                     <div class="modal fade" id="editTimeTbl" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                    id="staticBackdropLabel">Edit Time Table</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body ">
                                       <div class="mb-3">
                                          <input class="form-control font-14 fw-500 text-dark"
                                             type="file" id="formFileMultiple" multiple="">
                                       </div>
                                    </div>
                                    <button type="button"
                                       class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500   text-white hvr-shrink ">Submit</button>
                              </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </td>
              </tr>
              <tr>
                  <td colspan="2"><strong>ONLINE COURSES</strong></td>
                  <td></td>
              </tr>
















            </tbody>
         </table>
         </div>
      </div>
   </div>
</div>
@endsection
