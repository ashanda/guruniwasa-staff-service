<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function cashBalance()
    {
        try{

            return view('web.cash.balance');

        }catch(\Exception $exception){

            return;
        }
    }

    public function mySalary()
    {
        try{

            return view('web.cash.my_salary');

        }catch(\Exception $exception){

            return;
        }
    }
    public function compareSalary()
    {
        try{

            return view('web.cash.compare_salary');

        }catch(\Exception $exception){

            return;
        }
    }

    public function myLeaves()
    {
        try{

            return view('web.cash.my_leaves');

        }catch(\Exception $exception){

            return;
        }
    }



}
