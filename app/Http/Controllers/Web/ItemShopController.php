<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemShopController extends Controller
{


    public function itemShopView()
    {
        try{

            return view('web.item-shop.list_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function itemShop()
    {
        try{

            return view('web.item-shop.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function orderHistory()
    {
        try{

            return view('web.item-shop.order-history');

        }catch(\Exception $exception){

            return;
        }
    }


    public function singleItem()
    {
        try{

            return view('web.item-shop.single-item');

        }catch(\Exception $exception){

            return;
        }
    }


    public function orderCart()
    {
        try{

            return view('web.item-shop.order-cart');

        }catch(\Exception $exception){

            return;
        }
    }



    public function addOrder()
    {
        try{

            return view('web.item-shop.add-order');

        }catch(\Exception $exception){

            return;
        }
    }

    public function pendingItems()
    {
        try{

            return view('web.item-shop.pending-items');

        }catch(\Exception $exception){

            return;
        }
    }


    public function pendingDelivery()
    {
        try{

            return view('web.item-shop.pending-delivery');

        }catch(\Exception $exception){

            return;
        }
    }



    public function pendingPickUp()
    {
        try{

            return view('web.item-shop.pending-pickUp');

        }catch(\Exception $exception){

            return;
        }
    }





    public function pendingDispatched()
    {
        try{

            return view('web.item-shop.pending-dispatched');

        }catch(\Exception $exception){

            return;
        }
    }

    public function dispatched()
    {
        try{

            return view('web.item-shop.dispatched');

        }catch(\Exception $exception){

            return;
        }
    }


    public function itemOffers()
    {
        try{

            return view('web.item-shop.item_offers');

        }catch(\Exception $exception){

            return;
        }
    }

    public function addItems()
    {
        try{

            return view('web.item-shop.add_item');

        }catch(\Exception $exception){

            return;
        }
    }


    public function addOffers()
    {
        try{

            return view('web.item-shop.add_offers');

        }catch(\Exception $exception){

            return;
        }
    }

    public function shopPayments()
    {
        try{

            return view('web.item-shop.shop_payments');

        }catch(\Exception $exception){

            return;
        }
    }




    public function viewAnalytics()
    {
        try{

            return view('web.item-shop.view_analytics');

        }catch(\Exception $exception){

            return;
        }
    }








}
