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
         <h1 class="font-36 fw-bold text-uppercase text-purple">TEACHERS
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 justify-content-end">
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight align-items-center ">
         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.class_issues') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">CLASS ISSUES</p>
                  <div class="position-absolute custom-badge">
                     <span class="badge bg-danger rounded-circle custom-icon">
                     <i class="fas fa-envelope fs-5"></i>
                     </span>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.video_issues') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">VIDEO RECORDING ISSUES
                  </p>
                  <div class="position-absolute custom-badge">
                     <span class="badge bg-danger rounded-circle custom-icon">
                     <i class="fas fa-envelope fs-5"></i>
                     </span>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.teacher_views') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">TEACHER REVIEWS
                  </p>
                  <div class="position-absolute custom-badge">
                     <span class="badge bg-danger rounded-circle custom-icon">
                     <i class="fas fa-envelope fs-5"></i>
                     </span>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.class_video_report') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">CLASS & VIDEO ANALYSING
                     REPORT
                  </p>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.video_time_tables') }}" class="hvr-shrink w-100">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">TEACHER INTRO VIDEO
                  </p>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.gradewise_time_tables') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">GRADWISE TIME TABLES
                  </p>
               </div>
            </a>
         </div>



         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.teacher_payment') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">TEACHER PAYMENT
                  </p>
               </div>
            </a>
         </div>


   <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.our_teacher') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">OUR TEACHERS
                  </p>
               </div>
            </a>
         </div>



         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.add_grade') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">ADD GRADES & SUBJECTS

                  </p>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-3 mb-3 align-items-center text-center">
            <a href="{{ route('web.teachers.schedule_class') }}" class="hvr-shrink w-100  ">
               <div class="alert alert-info align-items-center card-1 position-relative custom-alert" role="alert">
                  <p class="font-16 text-uppercase fw-bold text-dark py-3 mb-0">ADD CLASS Schedule

                  </p>
               </div>
            </a>
         </div>



         



      </div>
   </div>
</div>
@endsection
