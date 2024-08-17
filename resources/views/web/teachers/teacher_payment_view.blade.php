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
         <h1 class="font-36 fw-bold text-uppercase text-purple">TEACHER PAYMENTS
         </h1>
         JANUARY - 2024
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
            <table id="teacherPayment" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>NAME</th>
                  <th>TOTAL CLASS FEE
                     AMOUNT
                  </th>
                  <th>ITEM SHOP
                  </th>
                  <th>OTHER
                     INCOMES
                  </th>
                  <th>TOTAL
                     INCOME
                  </th>
                  <th>RETENTION
                  </th>
                  <th>OTHER
                     DEDUCTIONS
                  </th>
                  <th>TOTAL
                     AMOUNT
                     AFTER
                     DEDUCTIONS
                  </th>
                  <th>TAX</th>
                  <th>GRAND
                     TOTAL
                  </th>
                  <th>SALARY SLIP
                  </th>
                  <th>PUBLISH</th>
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
                     <td>
                        <a class="w-100" data-bs-toggle="modal" data-bs-target="#salaryUpload">
                           <ul
                              class="d-flex justify-content-center font-13 text-white my-1 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
                              <li><i class="fa-solid fa-upload"></i></li>
                              <li class="d-none tab-d-none d-sm-block ps-2"> Upload </li>
                           </ul>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="salaryUpload" data-bs-backdrop="static"
                           data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                           aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                       id="staticBackdropLabel">SALARY SLIP Upload </h5>
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
                     <td>
                        <span class="bg-success fw-500 font-11 px-2 w-100 rounded-pill text-white py-1">
                        PUBLISH
                        </span>
                        <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#pulishEdit">EDIT</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pulishEdit"
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
                        <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#pulishDelete">DELETE</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pulishDelete"
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
