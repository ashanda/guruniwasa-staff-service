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
            <h1 class="font-27 fw-bold text-uppercase text-purple   pt-1">WELCOME TO GURU NIWASA LMS!
            </h1>
            <h1 class="font-27 fw-bold text-uppercase text-purple   pt-1">ගුරු නිවස ඉගෙනුම් කළමනාකරණ පද්ධතියට ඔබව
               සාදරයෙන් පිලිගනිමු!
            </h1>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-center">
             
               <div class="col-lg-5 col-sm-6 col-12 pt-lg-0 pt-sm-0 pt-3">
                <div class="card border-5  border-success  rounded-3 bg-white text-center">
                   <div class="card-body min-height-card align-items-center">
                      <h2 class="font-20 fw-bold text-dark" >REGISTERED Staff

                      </h2>
                      <h3 class="font-14 fw-bold text-secondary pt-3 pb-1">
                        GURU NIWASA Staff
                        LOGIN
                      </h3>
                      <h3 class="font-14 fw-bold text-secondary pt-3">
                        ගුරු නිවස ශිෂ්‍ය
                        පිවිසුම
                      </h3>
                      <a href="{{  route('web.login') }}" class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35 mt-4"  >
                    Login
                      </a>
                   </div>
                </div>
             </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
