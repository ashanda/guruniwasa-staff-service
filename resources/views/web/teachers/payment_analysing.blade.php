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
         <h1 class="font-36 fw-bold text-uppercase text-purple">PAYMENT ANALYSING
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-lg-10 mx-auto">
         <div class="table-responsive">
            <table id="paymentAnalysingTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th > </th>
                     <th >TEACHER NAME </th>
                     <th >PAYMENT STATUS</th>
                     <th >GRAPH VIEW</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     <td>
                        <img class="d-block w-25  w-50-mobile mx-auto rounded-circle"
                           src="{{asset('themes/default/img/place-holder.png')}}" alt="Guru Niwasa LMS">
                     </td>
                     <td>Abhiman Withakshana
                     </td>
                     <td>
                        <div class="progress text-center "  >
                           <div class="progress-bar progress-bar-custom progress-bar-positive w-100 fw-500  py-2  "  >
                              +20000
                           </div>
                        </div>
                        <div class="progress text-center mt-2"  >
                            <div class="progress-bar progress-bar-custom progress-bar-negative w-100 fw-500  py-2 ">
                                -20000
                            </div>
                        </div>
                     </td>
                     <td>
                        <a href="{{ route('web.teachers.payment_analysing_graph') }}" class="hvr-shrink   bg-primary text-white py-2  
                           font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">VIEW MORE
                        </a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection