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
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD SUBJECTS
         </h1>
         <p class="font-18 fw-bold text-purple">GRADE 6
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 ">
         <div class="text-end">
            <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow "></i>
            <span class=" text-uppercase font-13 fw-bold text-dark text-end"> Download excel</span>
         </div>
         <div class="row justify-content-end">
            <div class="col-lg-11">
               <div class="row justify-content-end pt-2">
                  <div class="col-lg-10 ">
                     <a class=" " data-bs-toggle="modal" data-bs-target="#addSubject">
                        <ul class="d-flex justify-content-center font-14 text-white 
                           my-1 py-2 px-3 bg-dark fw-500 align-items-center  rounded-pill">
                           <li><i class="fa fa-plus"></i></li>
                           <li class="  ps-2"> Add Grade </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="addSubject" data-bs-backdrop="static" 
                        tabindex="-1" aria-labelledby="addSubject" aria-hidden="true" >
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">SUBJECT NAME</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>
                                      

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">TEACHER</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">FEE</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">RETENTION</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">DAY</label>
                                                <input type="date" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">TIME</label>
                                                <input type="time" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">WHATSAPP GROUP LINK</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Alternate Day and Time</label>
                                                <input type="datetime-local" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>


                                    </div>
                                  
                                   
                                    <div class="text-center mt-3">
                                       <button type="button" class="btn text-uppercase font-12 
                                          text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Submit                                    </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="addSubjectTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>SUBJECT NAME</th>
                  <th>TEACHER  
                  </th>
                  <th>WHATSAPP GROUP LINK
                  </th>
                  <th>FEE
                  </th>
                  <th>EDIT
                     DELETE
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td> 
                     </td>
                     <td> 
                     </td>
                     <td> 
                     </td>
                     <td> 
                     </td>
                    <td>
                       
                         <button class="btn btn-warning fw-bolder font-11 px-2 w-100 rounded-pill "
                         data-bs-toggle="modal" data-bs-target="#edtSubject">Edit</button>



                         <div class="modal fade" id="edtSubject" data-bs-backdrop="static" 
                            tabindex="-1" aria-labelledby="edtSubject" aria-hidden="true" >
                            <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                     <form action="">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">SUBJECT NAME</label>
                                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
                                          
    
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">TEACHER</label>
                                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
    
    
    
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">FEE</label>
                                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
    
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">RETENTION</label>
                                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
    
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">DAY</label>
                                                    <input type="date" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
    
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">TIME</label>
                                                    <input type="time" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
    
    
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">WHATSAPP GROUP LINK</label>
                                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
    
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Alternate Day and Time</label>
                                                    <input type="datetime-local" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                 </div>
                                            </div>
    
    
                                        </div>
                                      
                                       
                                        <div class="text-center mt-3">
                                           <button type="button" class="btn text-uppercase font-12 
                                              text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Submit                                    </button>
                                        </div>
                                     </form>
                                  </div>
                               </div>
                            </div>
                         </div>


                         <button class="btn btn-danger fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                         data-bs-toggle="modal" data-bs-target="#subjectDelete">DELETE</button>
                      <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="subjectDelete"
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