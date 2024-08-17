<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videoView()
    {
        try{

            return view('web.videos.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function videoStudentLms()
    {
        try{

            return view('web.videos.student_lms');

        }catch(\Exception $exception){

            return;
        }
    }

    public function videoTeacherLms()
    {
        try{

            return view('web.videos.teacher_lms');

        }catch(\Exception $exception){

            return;
        }
    }


    public function videoAdminLms()
    {
        try{

            return view('web.videos.admin_lms');

        }catch(\Exception $exception){

            return;
        }
    }





    public function videoSuperAdminLms()
    {
        try{

            return view('web.videos.super_admin_lms');

        }catch(\Exception $exception){

            return;
        }
    }



}
