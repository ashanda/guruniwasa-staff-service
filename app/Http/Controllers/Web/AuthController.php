<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function homeView()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.open',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function loginView()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.login',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }



    public function forgotPassword()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.forgot-password',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }













}
