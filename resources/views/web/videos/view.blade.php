@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD LMS INTRO VIDEO
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row  justify-content-center middle-hight">
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <p
               class="font-24 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
               STUDENT
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white ">
                  <a href="{{ route('web.video.student_lms') }}"
                     class=" w-100 text-uppercase font-14 text-white rounded-pill
                     py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink"><i class="fa-solid fa-plus fs-5 text-white"></i>
                  LMS INTRO VIDEO </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <p
               class="font-24 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
               TEACHER
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white ">
                  <a href="{{ route('web.video.teacher_lms') }}"
                     class=" w-100 text-uppercase font-14 text-white rounded-pill
                     py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink"><i class="fa-solid fa-plus fs-5 text-white"></i>
                  LMS INTRO VIDEO </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <p
               class="font-24 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
               ADMIN
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white ">
                  <a href="{{ route('web.video.admin_lms') }}"
                     class=" w-100 text-uppercase font-14 text-white rounded-pill
                     py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink"><i class="fa-solid fa-plus fs-5 text-white"></i>
                  LMS INTRO VIDEO </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <p
               class="font-24 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
               SUPER ADMIN
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white ">
                  <a href="{{ route('web.video.super_admin_lms') }}"
                     class=" w-100 text-uppercase font-14 text-white rounded-pill
                     py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink"><i class="fa-solid fa-plus fs-5 text-white"></i>
                  LMS INTRO VIDEO </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
