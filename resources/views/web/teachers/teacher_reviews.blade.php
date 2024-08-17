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
         <h1 class="font-36 fw-bold text-uppercase text-purple">TEACHER REVIEW
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="teacherReview" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>Photo</th>
                  <th>TEACHER NAME   
                  </th>
                  <th>RATE
                  </th>
                  <th>COMMENTS
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center text-center">
                  <tr>
                     <td>
                        <div class="row justify-content-center">
                           <div class="col-lg-4">
                              <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                                 alt="Guru Niwasa LMS">
                           </div>
                        </div>
                     </td>
                     <td> Abhiman Withakshana</td>
                     <td>
                        <ul class="d-flex justify-content-center pb-2">
                           <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                           <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                           <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                           <li><i class="fa-solid fa-star text-warning me-2 fs-5 not-rating"></i></li>
                           <li><i class="fa-solid fa-star text-warning me-2 fs-5 not-rating"></i></li>
                        </ul>
                        <span class="bg-info fw-bolder font-12 px-4 py-2 w-100 rounded-pill text-white mb-2"> 150</span>
                     </td>
                     <td>
                        <button class="btn btn-info fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#remarkForm">
                        VIEW MORE</button>
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
                  </tr>
                  <tr>
                    <td>
                       <div class="row justify-content-center">
                          <div class="col-lg-4">
                             <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                                alt="Guru Niwasa LMS">
                          </div>
                       </div>
                    </td>
                    <td> Abhiman Withakshana</td>
                    <td>
                       <ul class="d-flex justify-content-center pb-2">
                          <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                          <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                          <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                          <li><i class="fa-solid fa-star text-warning me-2 fs-5 not-rating"></i></li>
                          <li><i class="fa-solid fa-star text-warning me-2 fs-5 not-rating"></i></li>
                       </ul>
                       <span class="bg-info fw-bolder font-12 px-4 py-2 w-100 rounded-pill text-white mb-2"> 150</span>
                    </td>
                    <td>
                       <button class="btn btn-info fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                          data-bs-toggle="modal" data-bs-target="#remarkForm">
                       VIEW MORE</button>
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
                 </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection