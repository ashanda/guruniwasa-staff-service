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
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS ISSUES
         </h1>
         <p class="font-18 fw-bold text-purple">JANUARY
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row justify-content-between align-items-center pb-3">
      <div class="col-lg-10 pt-2">
         <form action="">
            <div class="row align-items-center">
               <div class="col-lg-3 col-sm-3 col-6 pt-2">
                  <label class="form-label font-14 fw-bold text-purple  mb-0">TEACHER FILTER</label>
                  <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                     <option selected="">Select Teacher</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                  </select>
               </div>
               <div class="col-lg-3 col-sm-3 col-6 pt-lg-4 pt-sm-4 pt-4">
                  <button type="submit" class="btn hvr-shrink text-white
                     gradient-background-1 py-1 px-5 justify-content-around rounded-35 font-14 fw-500">Filter</button>
               </div>
            </div>
         </form>
      </div>
   </div>
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="classIssues" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>DAY  
                  </th>
                  <th>GRADE
                  </th>
                  <th>SUBJECT
                  </th>
                  <th>TEACHER
                  </th>
                  <th>STATUS
                  </th>
                  <th>EXTRA CLASS
                  </th>
                  <th>REMARK
                  </th>
                  <th>FOLLOWED BY</th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td>01.01.2024
                     </td>
                     <td> MONDAY</td>
                     <td>GRADE 6 
                     </td>
                     <td>SCIENCE
                     </td>
                     <td> ABHIMAN
                        WITHAKSHANA
                     </td>
                     <td> 
                        <span class="bg-danger font-11 rounded-pill text-white text-center py-2 px-3 ">NOT SHCEDULED</span>
                     </td>
                     <td>SHCEDULED</td>
                     <td>
                        <button class="btn btn-info fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#remarkForm">
                        Remark</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="remarkForm"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="mb-2">
                                             <label class="form-label font-14 fw-bold text-purple  mb-0">Add Remark </label>
                                             <textarea class="form-control fw-500 rounded-3 border-dark font-13" rows="5"></textarea>
                                          </div>
                                          <button type="button" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                          Submit</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td>
                        <span class="bg-success font-11 rounded-pill text-white text-center py-2 px-3 ">SUBMIT</span>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection