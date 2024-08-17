@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-2 col-4">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/hd_dp.png')}}"
               alt="Guru Niwasa LMS">
         </div>
         <div class="col-12 pt-2 text-center">
            <h1 class="font-24 fw-bold  text-purple   pt-1">
                ❤ We are Family ❤
            </h1>
            <h2 class="font-18 fw-bold  text-purple   pt-1">
                Log In | Teacher
            </h2>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-center">
               <div class="col-lg-6">
                  <div class="card border-5  border-info  rounded-3 bg-white  ">
                     <div class="card-body min-height-card align-items-center">
                        <form action="">
                           <div class="mb-2">
                              <label class="form-label font-12 fw-bold text-purple  mb-0">PHONE NUMBER <span class="text-danger">*</span> </label>
                              <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Phone Number">
                           </div>
                           <div class="mb-2">
                              <label class="form-label font-12 fw-bold text-purple  mb-0">PASSWORD <span class="text-danger">*</span> </label>
                              <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Password" required>
                           </div>
                           <div class="row align-items-center mt-3">
                            <div class="col-lg-4 col-sm-5 col-6">
                                 <a href=" " class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35 "  >
                                 Login
                                 </a>
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
@endsection
