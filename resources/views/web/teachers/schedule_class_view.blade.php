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
         <h1 class="font-36 fw-bold text-uppercase text-purple">schedule CLASSES
         </h1>
         <p class="font-18 fw-bold text-purple">GRADE 6 - ENGLISH MEDIUM
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
            <table id="scheduleClass" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>MONDAY</th>
                  <th>TUESDAY
                  </th>
                  <th>WEDNESDAY
                  </th>
                  <th>THURSDAY
                  </th>
                  <th>FRIDAY
                  </th>
                  <th>SATURDAY
                  </th>
                  <th>SUNDAY</th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td> </td>
                     <td>
                        <button class="btn btn-info fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#scheduleModel">
                        SCHEDULE </button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scheduleModel"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                       ADD CLASS MONDAY
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                          <form action="">
                                             <div class="mb-2">
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="form-group">
                                                         <label for="time-range" class="form-label form-label font-14 fw-bold text-purple  mb-0">TIME -</label>
                                                         <div class="input-group">
                                                            <input type="time" class="form-control fw-500 rounded-3 border-dark font-13" id="start-time" value="16:00" aria-label="Start Time">
                                                            <span class="input-group-text font-14 fw-bold text-purple">TO</span>
                                                            <input type="time" class="form-control fw-500 rounded-3 border-dark font-13" id="end-time" value="18:00" aria-label="End Time">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">TEACHER</label>
                                                <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                   >
                                                   <option selected>Select Teacher</option>
                                                   <option value="1">One</option>
                                                   <option value="2">Two</option>
                                                   <option value="3">Three</option>
                                                </select>
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">GRADE</label>
                                                      <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                         >
                                                         <option selected>Select Grade</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">SUJECT</label>
                                                      <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                         >
                                                         <option selected>Select Subject</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">ZOOM LINK</label>
                                                <input  type="text"  class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">PASSWORD</label>
                                                      <input  type="text"  class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">CLASS STATUS</label>
                                                      <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">SPECIAL NOTE</label>
                                                <textarea class="form-control fw-500 rounded-3 border-dark font-13" rows="5"></textarea>
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
                     </td>
                    
                     <td>4.00 - 6.00
                        SCIENCE THEORY
                        ABHIMAN SIR
                     </td>
                     <td>
                        <button class="btn btn-warning fw-bolder font-11 px-2 w-100 rounded-pill "
                           data-bs-toggle="modal" data-bs-target="#scheduleModelEdit">
                        EDIT </button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scheduleModelEdit"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                       EDIT CLASS MONDAY
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                          <form action="">
                                             <div class="mb-2">
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="form-group">
                                                         <label for="time-range" class="form-label form-label font-14 fw-bold text-purple  mb-0">TIME -</label>
                                                         <div class="input-group">
                                                            <input type="time" class="form-control fw-500 rounded-3 border-dark font-13" id="start-time" value="16:00" aria-label="Start Time">
                                                            <span class="input-group-text font-14 fw-bold text-purple">TO</span>
                                                            <input type="time" class="form-control fw-500 rounded-3 border-dark font-13" id="end-time" value="18:00" aria-label="End Time">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">TEACHER</label>
                                                <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                   >
                                                   <option selected>Select Teacher</option>
                                                   <option value="1">One</option>
                                                   <option value="2">Two</option>
                                                   <option value="3">Three</option>
                                                </select>
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">GRADE</label>
                                                      <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                         >
                                                         <option selected>Select Grade</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">SUJECT</label>
                                                      <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                         >
                                                         <option selected>Select Subject</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">ZOOM LINK</label>
                                                <input  type="text"  class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">PASSWORD</label>
                                                      <input  type="text"  class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple  mb-0">CLASS STATUS</label>
                                                      <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">SPECIAL NOTE</label>
                                                <textarea class="form-control fw-500 rounded-3 border-dark font-13" rows="5"></textarea>
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
                     </td>
                    
                     <td>
                        <button class="btn btn-dark fw-bolder font-11 px-2 w-100 rounded-pill "
                           data-bs-toggle="modal" data-bs-target="#scheduleModelView">
                        View </button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scheduleModelView"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                       VIEW CLASS MONDAY
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple  mb-0">TIME -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                              06.00 AM : 08:00 PM
                                            </p>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple 
                                             mb-0">TEACHER -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                              Name
                                            </p>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple 
                                             mb-0">GRADE -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                             10 GRADE
                                            </p>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple 
                                             mb-0">SUJECT -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                             English
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple 
                                             mb-0">ZOOM LINK -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                                https://www.freeformatter.com/html-formatter.html#before-output
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple 
                                             mb-0">PASSWORD -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                             123456
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple 
                                             mb-0">  STATUS -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                        Pending
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="time-range" class="form-label form-label font-14 fw-bold text-purple 
                                             mb-0">  NOTE -</label>

                                        </div>
                                        <div class="col-9">
                                            <p class="font-13 fw-500  text-dark pb-2">
                                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lor
                                            </p>
                                        </div>
                                    </div>


                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>

                     <td></td>
                     <td>
                        <button class="btn btn-danger fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#scheduleDelect">
                           DELETE</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scheduleDelect"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="mb-2">
                                     <p class="font-13 fw-500  text-dark pb-2">
                                         Are you sure you want to remove this Notice from the system ?
                                         This action cannot be undone.
                                     </p>
                                  
                                    </div>
                                    
                                    <div class="text-end">


                                    <button type="submit" class="btn btn-primary font-13 fw-500  ">Yes</button>
                                    <button type="button" class="btn btn-secondary font-13 fw-500  " data-bs-dismiss="modal">Close</button>
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