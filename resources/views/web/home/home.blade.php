@extends('web.layouts.app')
@section('content')
@if(session()->has('staff_data'))
    @php
        $staffData = session('staff_data');
        
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-2">
      </div>
      <div class="col-lg-6 col-sm-6 text-center pt-lg-0 pt-3">
         <p class="font-17 fw-bolder text-purple">Hello, <span class="fst-italic">< {{ $staffData['name'] }} ></span>
         </p>
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">WELCOME TO GURU NIWASA LMS
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row align-items-center middle-hight">
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{  route('web.fees.view') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-money-bill fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">CLASS FEES
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.other_transactions.view') }}"  class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-money-bill-wave fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">OTHER TRANSACTIONS
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.video.view') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-circle-play fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">LMS INTRO VIDEO
                  </p>
               </div>
            </div>
         </a>
      </div>

      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
        <a href="{{ route('web.certificate.all_certificate') }}" class="hvr-shrink w-100">
           <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
              <div class="col-1  py-1">
                 <i class="fa fa-certificate fs-3 text-white  "></i>
              </div>
              <div class="col-10 py-1 ps-4">
                 <p class="font-13 text-white fw-500">  STUDENT
                    VIDEOS / CERTIFICATES

               </p>
              </div>
           </div>
        </a>
     </div>

      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.student.talents') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-book fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">STUDENTS
                </p>
               </div>
            </div>
         </a>
      </div>


      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
        <a href="{{ route('web.teachers.section') }}" class="hvr-shrink w-100">
           <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
              <div class="col-1  py-1">
                 <i class="fa fa-chalkboard-user fs-3 text-white  "></i>
              </div>
              <div class="col-10 py-1 ps-4">
                 <p class="font-13 text-white fw-500">TEACHERS

               </p>
              </div>
           </div>
        </a>
     </div>


      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.class.view') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-book-open fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">TODAY LIVE CLASSES
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.salary.cash_balance')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-sack-dollar fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">CASH BALANCE
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.salary.my_salary')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-money-bill-trend-up fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">MY SALARY
                  </p>
               </div>
            </div>
         </a>
      </div>
      {{--
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.online.exam')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-globe fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">Online Exams</p>
                  <p class="font-13 text-white fw-500">සජිවි පන්ති</p>
               </div>
            </div>
         </a>
      </div>
      --}}
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.student.attendance')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-clipboard-user fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">MY ATTENDANCE
                  </p>
               </div>
            </div>
         </a>
      </div>
      {{--
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.teacher.subject')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-chalkboard-user fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">Teachers & New Subjects</p>
                  <p class="font-13 text-white fw-500">ගුරුවරුන් සහ නව විෂයන් </p>
               </div>
            </div>
         </a>
      </div>
      --}}
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{  route('web.notice.board') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-circle-exclamation fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">Notice Board</p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.notice.birthday_list')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-cake-candles fs-3 text-white "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">BIRTHDAYS  </p>
               </div>
            </div>
         </a>
      </div>
      {{--
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.review.teacher') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-regular fa-comment  fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">Teacher Review</p>
                  <p class="font-13 text-white fw-500">ගුරුවරුන් ගැන ඔබේ අදහස්</p>
               </div>
            </div>
         </a>
      </div>
      --}}
      {{--
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.analysis.report')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-magnifying-glass-chart fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">Final Analysis Report</p>
                  <p class="font-13 text-white fw-500">විශ්ලේෂණ වාර්තා</p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{  route('web.time.table') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1 py-1">
                  <i class="fa-solid fa-table fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">Time Tables</p>
                  <p class="font-13 text-white fw-500">කාල සටහන්</p>
               </div>
            </div>
         </a>
      </div>
      --}}
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{  route('web.item-shop-view') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-cart-shopping fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-18 text-white fw-500">Items Shop</p>
               </div>
            </div>
         </a>
      </div>
   </div>
</div>
@endsection
