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
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD ITEMS
         </h1>
         ITEM SHOP
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
         <p>
            <a class=" rounded-pill font-13 w-100 text-white rounded-3 py-2 px-3
               bg-secondary fw-500 align-items-center " data-bs-toggle="modal" data-bs-target="#addItemsForm">
            <i class="fa fa-plus"></i>  Add Items
            </a>
         </p>
         <div class="modal fade" id="addItemsForm" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="addItemsForm" aria-hidden="true">
            <div class="modal-dialog text-start">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                        Add Items
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="">
                        <div class="modal-body modal-lg">
                           <div class="row">
                              <div class="col-6">
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">ITEM NAME </label>
                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">ITEM CODE</label>
                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">CATEGORY </label>
                                    <select class="form-select fw-500 rounded-3 border-dark font-13"
                                       aria-label="Default select example">
                                       <option selected="">Select CATEGORY</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                    </select>
                                 </div>
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">PRICE</label>
                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>
                              </div>
                              <div class="col-6">
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">COMISSION ACCOUNT</label>
                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">RATE</label>
                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">WEIGHT (KG)</label>
                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">IMAGE</label>
                                    <input type="file" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">DETAILS </label>
                                    <textarea class="form-control fw-500 rounded-3 border-dark font-13" rows="5"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="text-center">
                              <button type="button" class="btn text-uppercase font-12
                                 text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">SUBMIT</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>


         <div class="row justify-content-end mt-3">
            <div class="col-lg-9">
               <select class="form-select form-select-lg border border-info rounded-pill font-13 fw-500 text-dark py-2 " aria-label=".form-select-lg example">
                  <option selected>Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
               </select>
            </div>
         </div>


      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="addItems" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>CODE</th>
                  <th>NAME</th>
                  <th>IMAGE
                  </th>
                  <th>CATEGORY
                  </th>
                  <th>PRICE
                  </th>
                  <th>ITEM DETAILS
                  </th>
                  <th>COMISSION ACC
                  </th>
                  <th>RATE
                  </th>
                  <th>ENTERED
                     BY
                  </th>
                  <th>EDIT /
                     DELETE
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td> </td>
                     <td>GRADE 6 SCIENCE
                        ENGLISH MEDIUM
                        TERM TEST PAPER
                        BOOK
                     </td>
                     <td>
                        <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                           alt="Guru Niwasa LMS">
                     </td>
                     <td>TT BOOK</td>
                     <td>Grade
                        6
                     </td>
                     <td> TERM TEST PAPERS
                        <br>
                        2016 - 2022
                     </td>
                     <td>
                     </td>
                     <td>3%</td>
                     <td>PRAMOD
                        THILINA
                     </td>
                     <td>
                        <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#errorDelete">
                        DELETE</button>
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
                        <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#disEdit">
                        EDIT</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="disEdit"
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
