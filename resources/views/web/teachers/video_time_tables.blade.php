@extends('web.layouts.app')
@section('content')
{{-- {{ dd($teachers) }} --}}
<div class="container-fluid">
    <div class="row align-items-center pt-2">
        <div class="col-lg-3 col-sm-3">
            <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
                <i class="fa-regular fa-circle-left hvr-icon"></i>
                BACK TO HOME
            </a>
        </div>
        <div class="col-lg-6 col-sm-6 text-center">
            <h1 class="font-36 fw-bold text-uppercase text-purple">TEACHER INTRO VIDEO
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
            <div class="table-responsive">




                <table id="videoTimeTbl" class="table table-striped table-hover table-bordered">
                    <thead class="text-white gradient-background text-uppercase fw-light font-14">
                       <tr>
                          
                          <th>TEACHER NAME</th>
                          
                          <th>INTRO VIDEO</th>
                       </tr>
                    </thead>
                    <tbody class="font-14 align-items-center fw-500">
                      @foreach ($teachers as $teacher) 
                       <tr>
                          
                          <td>{{ $teacher['name'] }}
                          </td>

                        <td>
                          <form action="{{ route('web.teachers.update_video') }}" method="post" class="row g-3">
                           @csrf
                                    <div class="col-lg-9 col-sm-8">
                                       <input type="text" class="form-control font-13 fw-500 text-dark"
                                             value="{{ $teacher['intro']['data']['video_link'] ?? '' }}" name="video_url">
                                        <input type="hidden" name="teacher_id" value="{{ $teacher['id'] }}"> 
                                        <input type="hidden" name="video_id" value="{{  $teacher['intro']['data']['id'] ?? ''  }}">     
                                    </div>
                                    <div class="col-lg-2 col-sm-3">
                                       <button type="submit" class="btn btn-success font-12 px-4 fw-bolder rounded-pill text-uppercase">SUBMIT</button>
                                       @if ($teacher['intro']['data']['video_link'] ?? '')
                                        <a href="{{ $teacher['intro']['data']['video_link'] ?? '' }}" target="_blank" class="btn btn-warning font-12 px-4 fw-bolder rounded-pill text-uppercase">Watch</a>    
                                       @endif
                                       </div>
                                    <div class="col-lg-1"></div>
                                 </form>
                            
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
