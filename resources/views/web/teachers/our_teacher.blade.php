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
         <h1 class="font-36 fw-bold text-uppercase text-purple"> OUR TEACHERS

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
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="ourTeacherTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>PHOTO</th>
                  <th>NAME
                  </th>
                  <th>CONTACT NO
                  </th>
                  <th>SECOND
                    CONTACT NO
                  </th>
                  <th>GRADES
                  </th>
                  <th>SUBJECTS
                  </th>
                  <th>RETENTION RATE
                  </th>
                  
                  <th>BIRTHDAY</th>
                  <th>STATUS 
                  </th>
                  <th>DELETE</th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                 @foreach ($teachers as $teacher)
    <tr>
        <td>
            <img class="d-block w-50 mx-auto rounded-circle"
                src="{{ asset('themes/default/img/place-holder.png') }}" alt="Guru Niwasa LMS">
        </td>
        <td>{{ $teacher['name'] }}</td>
        <td>{{ $teacher['contact_no'] }}</td>
        <td>{{ $teacher['secondary_contact_no'] }}</td>
        
        <!-- Check if 'relatedData' and 'grade' exist before accessing -->
        <td>
            @if (isset($teacher['relatedData']['grade']) && is_array($teacher['relatedData']['grade']))
                @foreach ($teacher['relatedData']['grade'] as $grade)
                    {{ $grade['gname'] ?? 'N/A' }}<br>
                @endforeach
            @else
                N/A
            @endif
        </td>

        <!-- Check if 'subject_details' exists and is an array -->
        <td>
            @if (isset($teacher['subject_details']) && is_array($teacher['subject_details']))
                @foreach ($teacher['subject_details'] as $subject)
                    {{ $subject['data']['sname'] ?? 'N/A' }}<br>
                @endforeach
            @else
                N/A
            @endif
        </td>
        
        <td>
            <span class="w-100 text-uppercase font-13 w-100 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center">10%</span>
        </td>
        <td>199:12:29</td>
        <td>PUBLISH</td>
        <td>
            <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                data-bs-toggle="modal" data-bs-target="#pulishEdit">EDIT</button>

            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pulishEdit"
                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-500 font-14 rounded-3 text-dark pb-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                    <button type="button" class="btn font-14 text-white gradient-background-1 py-2 px-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
                data-bs-toggle="modal" data-bs-target="#pulishDelete">DELETE</button>

            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pulishDelete"
                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-500 font-14 rounded-3 text-dark pb-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                    <button type="button" class="btn font-14 text-white gradient-background-1 py-2 px-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
@endforeach

               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
