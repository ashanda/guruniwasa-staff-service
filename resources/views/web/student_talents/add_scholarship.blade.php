
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
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD NEW SCHOLARSHIP

         </h1>

      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">

      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">

   <div class="row middle-hight">

        <div class="col-lg-6 col-sm-6 mx-auto">
           <div class="card p-3">
              <div class="row">
                 <div class="col-6">
                    <p class="font-14 fw-bolder text-dark ">SUNALI PERERA</p>
                 </div>
                 <div class="col-6">
                    <p class="font-14 fw-bolder text-dark ">GNI 2244</p>
                 </div>
                 <div class="col-6">
                    <p class="font-14 fw-bolder text-dark ">GRADE 6 - ENGLISH MEDIUM</p>
                 </div>
                 <div class="col-6">
                    <p class="font-14 fw-bolder text-dark ">077 287 9970 </p>
                 </div>
                 <div class="col-6 mx-auto pt-3 text-center">
                    <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-14 text-white
                       rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">STUDENT DETAILS
                    </a>
                 </div>
              </div>
           </div>
        </div>

      <div class="col-12">
         <div class="table-responsive  ">
            <table id="scholarshopAdd" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>GRADE</th>
                  <th>SUBJECT
                  </th>
                  <th>TEACHER
                  </th>
                  <th>SCHOLARSHIP CATEGOR
                  </th>

                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td> </td>

                     <td> Science Theory | English Medium |
                        Abhiman Sir
                        </td>



                     <td> </td>
                     <td>

                       <form action="">
                        <div class="row">
                            <div class="col-8">
                                <select class="form-select form-select-lg border border-info rounded-pill font-13 fw-500 text-dark py-2 "
                                aria-label=".form-select-lg example">
                                    <option selected="">Select Scholarship Categor</option>
                                    <option value="1">Normal Card</option>
                                    <option value="2">Half Card</option>
                                    <option value="3">Quarter Card</option>
                                    <option value="3">FREE CARD</option>
                                 </select>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn w-100 text-uppercase font-13 text-white rounded-pill py-2 px-3
                                bg-success fw-bolder align-items-center ">Submit</button>
                            </div>
                        </div>
                       
                       
                       </form>
                     </td>




                  </tr>

               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
