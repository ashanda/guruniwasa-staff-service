<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function feesView()
    {
        try{

            return view('web.fees.all_fees');

        }catch(\Exception $exception){

            return;
        }
    }
    public function classFees()
    {
        try{

            return view('web.fees.class_fees');

        }catch(\Exception $exception){

            return;
        }
    }


    public function feesClassPending()
    {
        try{

            return view('web.fees.fees_class_pending');

        }catch(\Exception $exception){

            return;
        }
    }








    public function classFeesCash()
    {
        try{

            return view('web.fees.cash');

        }catch(\Exception $exception){

            return;
        }
    }

    public function classFeesPos()
    {
        try{

            return view('web.fees.pos');

        }catch(\Exception $exception){

            return;
        }
    }
    public function classFeesCardPayment()
    {
        try{

            return view('web.fees.card_payment');

        }catch(\Exception $exception){

            return;
        }
    }







    public function classFeesErrorPayment()
    {
        try{

            return view('web.fees.error_payment');

        }catch(\Exception $exception){

            return;
        }
    }


    public function classFeesBankPayment()
    {
        try{

            return view('web.fees.bank_payment');

        }catch(\Exception $exception){

            return;
        }
    }


    public function paymentHistory()
    {
        try{

            return view('web.fees.payment_history');

        }catch(\Exception $exception){

            return;
        }
    }


    
}
