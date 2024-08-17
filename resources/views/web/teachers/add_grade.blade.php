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
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD GRADES AND SUBJECTS
         </h1>
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
                     <a class=" " data-bs-toggle="modal" data-bs-target="#addNotice">
                        <ul class="d-flex justify-content-center font-14 text-white 
                           my-1 py-2 px-3 bg-dark fw-500 align-items-center  rounded-pill">
                           <li><i class="fa fa-plus"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Add Grade </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="addNotice" data-bs-backdrop="static" 
                        tabindex="-1" aria-labelledby="addNotice" aria-hidden="true" >
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body ">
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple text-start  mb-0">ADD GRADES</label>
                                          <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                       </div>
                                    </div>
                                    <div class="text-center">
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
      <div  class="col-lg-2 col-sm-3 mb-3 align-items-center">
         <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
            <p class="fw-bolder  text-center">

                <a href="{{ route('web.teachers.add_subject')}}" class="hvr-shrink font-20 text-dark">GRADE 1</a>
               </p>
            <div class="row pt-2">
               <div class="col-lg-6">
                  <a class=" " data-bs-toggle="modal" data-bs-target="#EditGrade">
                     <ul class="d-flex justify-content-center font-14 text-white 
                        my-1 py-2 px-3 bg-secondary fw-500 align-items-center  rounded-pill">
                        <li><i class="fa fa-pencil"></i></li>
                     </ul>
                  </a>
                  <div class="modal fade" id="EditGrade" data-bs-backdrop="static" 
                     tabindex="-1" aria-labelledby="addNotice" aria-hidden="true" >
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                 Edit  Grade
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="">
                                 <div class="modal-body ">
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Edit Grade</label>
                                       <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <button type="button" class="btn text-uppercase font-12 
                                       text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Edit</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <a class="" data-bs-toggle="modal" data-bs-target="#deleteGrade">
                     <ul class="d-flex justify-content-center font-14 text-white 
                        my-1 py-2 px-3 bg-danger fw-500 align-items-center  rounded-pill">
                        <li><i class="fa fa-trash"></i></li>
                     </ul>
                  </a>
                  <div class="modal fade" id="deleteGrade" data-bs-backdrop="static" 
                     tabindex="-1" aria-labelledby="deleteGrade" aria-hidden="true" >
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                 Remove   Grade
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="">
                                 <div class="modal-body ">
                                    <div class="mb-2">
                                       <p class="font-15 fw-500 text-dark pb-2">
                                          Are you sure you want to remove this Notice from the system ?
                                          This action cannot be undone.
                                       </p>
                                    </div>
                                    <div class="text-end">
                                       <button type="submit" class="btn btn-primary font-15 fw-500 ">Yes</button>
                                       <button type="button" class="btn btn-secondary font-15 fw-500 " data-bs-dismiss="modal">Close</button>
                                    </div>
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
      <div  class="col-lg-2 col-sm-3 mb-3 align-items-center">
        <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
           <p class="fw-bolder  text-center">

            <a href="{{ route('web.teachers.add_subject')}}" class="hvr-shrink font-20 text-dark">GRADE 2</a>
           </p>
           <div class="row pt-2">
              <div class="col-lg-6">
                 <a class=" " data-bs-toggle="modal" data-bs-target="#EditGrade">
                    <ul class="d-flex justify-content-center font-14 text-white 
                       my-1 py-2 px-3 bg-secondary fw-500 align-items-center  rounded-pill">
                       <li><i class="fa fa-pencil"></i></li>
                    </ul>
                 </a>
                 <div class="modal fade" id="EditGrade" data-bs-backdrop="static" 
                    tabindex="-1" aria-labelledby="addNotice" aria-hidden="true" >
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                Edit  Grade
                             </h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                             <form action="">
                                <div class="modal-body ">
                                   <div class="mb-2">
                                      <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Edit Grade</label>
                                      <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                   </div>
                                </div>
                                <div class="text-center">
                                   <button type="button" class="btn text-uppercase font-12 
                                      text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Edit</button>
                                </div>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6">
                 <a class="" data-bs-toggle="modal" data-bs-target="#deleteGrade">
                    <ul class="d-flex justify-content-center font-14 text-white 
                       my-1 py-2 px-3 bg-danger fw-500 align-items-center  rounded-pill">
                       <li><i class="fa fa-trash"></i></li>
                    </ul>
                 </a>
                 <div class="modal fade" id="deleteGrade" data-bs-backdrop="static" 
                    tabindex="-1" aria-labelledby="deleteGrade" aria-hidden="true" >
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                Remove   Grade
                             </h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                             <form action="">
                                <div class="modal-body ">
                                   <div class="mb-2">
                                      <p class="font-15 fw-500 text-dark pb-2">
                                         Are you sure you want to remove this Notice from the system ?
                                         This action cannot be undone.
                                      </p>
                                   </div>
                                   <div class="text-end">
                                      <button type="submit" class="btn btn-primary font-15 fw-500 ">Yes</button>
                                      <button type="button" class="btn btn-secondary font-15 fw-500 " data-bs-dismiss="modal">Close</button>
                                   </div>
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
@endsection