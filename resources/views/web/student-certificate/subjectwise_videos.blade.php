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
         <h1 class="font-36 fw-bold text-uppercase text-purple">VIEW SUBJECTWISE VIDEOS
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
        <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
        <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
  
   <div class="row middle-hight">
    <div class="col-lg-10 pt-2">
        <form action="">
           <div class="row align-items-center">
              <div class="col-lg-5 col-sm-5 col-6 pt-2">
                 <label class="form-label font-14 fw-bold text-purple  mb-0">TEACHER NAME</label>
                 <input type="text" class="form-control fw-500 rounded-3 border-dark font-12 mb-2"   placeholder="Enter Teacher Name">

              </div>
              
              <div class="col-lg-3 col-sm-3 col-6 pt-lg-4 pt-sm-4 pt-4">
                 <button type="submit" class="btn hvr-shrink text-white
                    gradient-background-1 py-1 px-5 justify-content-around rounded-35 font-14 fw-500">Filter</button>
              </div>
           </div>
        </form>
     </div>
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="subjectwiseVideoTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>TEACHER NAME</th>
                  <th>STUDENT NAME
                  <th>TOPIC
                  </th>
                  <th>GOOGLE DRIVE LINK
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td>ABHIMAN WITHAKSHANA
                    </td>
                      
                     <td>Onaya Christine
                        <br>
                        <a href="{{ route('web.student.details') }}" class=" text-white
                           font-12 text-white rounded-pill py-2 px-5 bg-primary fw-500
                           align-items-center   hvr-shrink">View
                        </a>
                     </td>
                     <td>  
                        GRADE 6

                     </td>
                    
                     <td>
                        <a href="https://www.youtube.com/watch?v=Nsg_7GpaTLY&list=RDMM&index=15"
                         target="_blank" class=" text-center text-uppercase font-12 rounded-pill py-2 px-lg-3 px-1 alert-warning
                          fw-500 align-items-center  
         hvr-shrink"><i class="fa-solid fa-play"></i> Click to Watch</a>
                    </td>


                     
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection