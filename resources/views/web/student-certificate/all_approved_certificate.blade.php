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
         <h1 class="font-36 fw-bold text-uppercase text-purple">APPROVED CERTIFICATES
         </h1>
         <p class="font-20 fw-500 text-purple">  GRADE 06

         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
  
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="approvedCertificateTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>STUDENT NAME
                  <th>GRADE
                  </th>
                  
                  <th>DOCUMENT
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td>01.01.2024 </td>
                      
                     <td>
                        KAVEESHA PERERA <br>
                        <a href="{{ route('web.student.details') }}" class=" text-white
                           font-12 text-white rounded-pill py-2 px-5 bg-primary fw-500
                           align-items-center   hvr-shrink">View
                        </a>
                     </td>
                     <td>  
                        GRADE 6

                     </td>
                    
                     <td> 
                        <button class="btn btn-info fw-500 font-11 px-5 rounded-pill text-white"
                        data-bs-toggle="modal" data-bs-target="#certificateModel">
                        VIEW</button>
                     <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="certificateModel"
                        tabindex="-1" aria-labelledby="certificateModel" aria-hidden="true" >
                        <div class="modal-dialog modal-dialog-centered ">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body ">
                                 <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <img class="d-block w-100  " src="{{asset('themes/default/img/certifiacte.jpg')}}"
            alt="Guru Niwasa LMS">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                      
                       
                       

                      
                        <button class="btn btn-danger fw-500 font-11 px-5  rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#certificateReject">
                           DELETE</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="certificateReject"
                           tabindex="-1" aria-labelledby="certificateReject" aria-hidden="true" >
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