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
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD LMS INTRO VIDEO
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive">
            <table   class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>TEACHERS</th>
                     <th>URL</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     <td>
                        Live Classes / සජීවී පන්ති
                     </td>
                     <td>
                        <form class="row g-3">
                           <div class="col-lg-10 col-sm-9">
                              <input type="text" class="form-control font-13 fw-500 text-dark "  value="https://www.youtube.com/watch?v=Nsg_7GpaTLY&list=RDMM&index=15">
                           </div>
                           <div class="col-lg-2 col-sm-3">
                              <button type="submit" class="btn btn-success
                                 font-12 px-3 fw-bolder rounded-pill text-uppercase w-100">SUBMIT</button>
                           </div>
                        </form>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        Video Recordings / වීඩියෝ පටිගත කිරීම්
                     </td>
                     <td>
                        <form class="row g-3">
                            <div class="col-lg-10 col-sm-9">
                              <input type="text" class="form-control font-13 fw-500 text-dark "
                              value="https://www.youtube.com/watch?v=Nsg_7GpaTLY&list=RDMM&index=15" readonly>
                           </div>
                           <div class="col-lg-2 col-sm-3">
                              <button type="submit" class="btn btn-danger
                                 font-12 px-3 fw-bolder rounded-pill text-uppercase w-100 ">DELETE</button>
                           </div>
                        </form>
                     </td>
                  </tr>


                  <tr>
                    <td>
                        Recordings /  පටිගත කිරීම්
                    </td>
                    <td>
                       <form class="row g-3">
                        <div class="col-lg-10 col-sm-9">
                             <input type="text" class="form-control font-13 fw-500 text-dark "  
                              value="https://www.youtube.com/watch?v=Nsg_7GpaTLY&list=RDMM&index=15">
                          </div>
                          <div class="col-lg-2 col-sm-3">
                             <button type="submit" class="btn btn-warning
                                font-12 px-3 fw-bolder rounded-pill text-uppercase w-100">EDIT</button>
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
