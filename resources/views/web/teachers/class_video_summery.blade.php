
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
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS AND VIDEO ANALYSING
         </h1>
         <p class="font-20 fw-500 text-purple">  JANUARY
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
            <table id="classVideosSummery" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                <tr class="table-header">
                    <th rowspan="2">TEACHER NAME</th>
                    <th colspan="7">CLASS ANALYSING</th>
                    <th colspan="6">VIDEO RECORDING</th>
                </tr>
                <tr class="table-header">
                    <th>WELL DONE</th>
                    <th>NOT SCHEDULED</th>
                    <th>LATE START</th>
                    <th>FINISHED EARLY</th>
                    <th>POSTPONED</th>
                    <th>EXTRA CLASS</th>
                    <th>HOLIDAY</th>
                    <th>DONE</th>
                    <th>POSTPONED</th>
                    <th>HOLIDAY</th>
                    <th>LATE UPLOAD</th>
                    <th>NO VIDEO</th>
                </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                    <td>ABHIMAN
                        WITHAKSHANA </td>
                    <td> 5</td>
                    <td>1 </td>
                    <td> 1</td>
                     <td> 0</td>
                     <td> 0</td>
                     <td> 0</td>
                     <td> 0</td>
                     <td>6 </td>
                     <td> 0</td>
                     <td> 0</td>
                      <td> 0</td>
                      <td> 0</td>
                      
                  </tr>

               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
