
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
         <h1 class="font-36 fw-bold text-uppercase text-purple">SCHOLARSHIP DETAILS
         </h1>

      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>

<p>
    <a href="{{ route('web.scholarship.add') }}" class="text-white bg-primary font-14 fw-500
               rounded-pill px-3 py-2 hvr-shrink">+ Add New</a></p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row justify-content-between align-items-center pb-3">
        <div class="col-lg-10 mx-auto">
            <div class="row align-items-center text-center ">
                <div class="col-lg-3 col-sm-3 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                  <span class="  text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                     bg-light-blue fw-bolder align-items-center  ">FREE CARD COUNT
                     - 150</span>
               </div>
               <div class="col-lg-3 col-sm-3 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                 bg-light-blue fw-bolder align-items-center  ">HALF CARD COUNT

                   - 150</span>
             </div>
             <div class="col-lg-3 col-sm-3 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                  bg-light-blue fw-bolder align-items-center  ">QUARTER CARD COUNT</span>
             </div>
             <div class="col-lg-3 col-sm-3 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                  bg-light-blue fw-bolder align-items-center  ">NORMAL CARD COUNT</span>
             </div>
            </div>
         </div>
        <div class="col-lg-10 pt-2">
           <form action="">
              <div class="row align-items-center">
                 <div class="col-lg-3 col-sm-3 col-6 pt-2">
                    <label class="form-label font-14 fw-bold text-purple  mb-0">Subject</label>
                    <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                       <option selected="">Select Subject</option>
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                    </select>
                 </div>
                 <div class="col-lg-3 col-sm-3 col-6 pt-2">
                    <label class="form-label font-14 fw-bold text-purple  mb-0">Teacher</label>
                    <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                       <option selected=""> Select Teacher</option>
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                    </select>
                 </div>
                 <div class="col-lg-3 col-sm-3 col-6 pt-2">
                    <label class="form-label font-14 fw-bold text-purple  mb-0">Grade</label>
                    <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                       <option selected=""> Select Grade</option>
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
            <table id="scholarshopDetails" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>STUDENT PHOTO
                  </th>
                  <th>NAME
                  </th>
                  <th>DETAILS
                  </th>
                  <th>SCHOLARSHIP
                    CATEGORY

                  </th>
                  <th>GRADE
                  </th>
                  <th>SUBJECT
                  </th>
                  <th>TEACHER
                  </th>
                  <th>TEACHER
                    APPROVAL</th>
                  <th>ABHIMAN
                    SIR
                    APPROVAL</th>
                  <th>DOCUMENT</th>
                  <th>INFORM TO
                    STUDENT
                    </th>
                  <th>FOLLOWED BY</th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td> </td>
                     <td>
                        <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                           alt="Guru Niwasa LMS">

                     </td>
                     <td> </td>

                     <td>
                        <a href="{{ route('web.student.details') }}" class=" text-white
                           font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                           align-items-center   hvr-shrink">View
                        </a>
                     </td>
                     <td> FREE CARD
                     </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td>Approved
                     </td>
                     <td>Approved
                    </td>

                    <td>
                        <button class="btn btn-primary fw-500 font-12 px-2 w-100 rounded-pill text-white" d
                        ata-bs-toggle="modal" data-bs-target="#viewProofDoc">View</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
                         id="viewProofDoc" tabindex="-1" aria-labelledby="exampleModalLabel"  >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                        <img class="d-block w-100 " src="{{asset('themes/default/img/6.webp')}}" alt="Guru Niwasa LMS">

                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                    <td>CALLED </td>



                     <td>
                        Thilina
                        <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
                        data-bs-toggle="modal" data-bs-target="#scholshipDelete">
                        DELETE</button>
                     <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scholshipDelete"
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
                           data-bs-toggle="modal" data-bs-target="#scholshipEdit">
                        EDIT</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scholshipEdit"
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
