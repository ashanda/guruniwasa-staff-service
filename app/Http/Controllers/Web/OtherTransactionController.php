<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherTransactionController extends Controller
{
    public function  View()
    {
        try{

            return view('web.other_transaction.view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function  addTransaction()
    {
        try{

            return view('web.other_transaction.add_transaction');

        }catch(\Exception $exception){

            return;
        }
    }
    public function  cash()
    {
        try{

            return view('web.other_transaction.cash');

        }catch(\Exception $exception){

            return;
        }
    }
    
    public function  allPayment()
    {
        try{

            return view('web.other_transaction.all_payment');

        }catch(\Exception $exception){

            return;
        }
    }
    


    







}
