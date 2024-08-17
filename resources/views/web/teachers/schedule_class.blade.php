@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">SHCEDULE CLASSES
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight">
         <div class="col-lg-6">
            <h3 class="font-18 fw-bold  text-purple pb-2 text-center">ENGLISH MEDIUM
            </h3>
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                     <tbody>
                        <tr>
                           <td>
                              <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                  ">GRADE 1
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 2
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 3
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 4
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE5
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 6
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="col-lg-6">
                  <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                     <tbody>
                        <tr>
                           <td>
                              <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                ">GRADE 1
                              </p>
                           </td>
                            <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 2
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 3
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 4
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE5
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 6
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <h3 class="font-18 fw-bold  text-purple pb-2 text-center">SINHALA MEDIUM
            </h3>
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                     <tbody>
                        <tr>
                           <td>
                              <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                  ">GRADE 1
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"   class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 2
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 3
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 4
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE5
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 6
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="col-lg-6">
                  <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                     <tbody>
                        <tr>
                           <td>
                              <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                ">GRADE 1
                              </p>
                           </td>
                            <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 2
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 3
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 4
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE5
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                        <tr>
                           <td> <p class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                              ">GRADE 6
                              </p>
                           </td>
                             <td> <a  href="{{ route('web.teachers.schedule_class_view') }}"    class=" w-100 text-uppercase font-11 hvr-shrink text-white rounded-pill py-2 px-3 bg-secondary fw-500
                            ">SCHEDULE
                           </a></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection