<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ItemShopController extends Controller
{

    
    public function itemCategories(Request $request)
    {
         $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/item-categories-index';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                
                
            ]);
          
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {

                    $data = $body['data'];
                    // Return the student data as JSON for AJAX
                    return view('web.item-shop.item_categories',compact('data'));
                } else {
                    Alert::error($body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }
    }



    public function itemCategoriesStore( Request $request )
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/item-categories-store';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'category_name' => $request->category_name,
                ],
                
            ]);
          
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {

                    
                    // Return the student data as JSON for AJAX
                    Alert::success($body['message']);
                    return redirect()->back();
                } else {
                    Alert::error($body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }
    }

    public function itemCategoriesUpdate( Request $request )
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/item-categories-update';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'category_id' => $request->category_id,
                    'category_name' => $request->category_name,
                ],
                
            ]);
          
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {

                    
                    // Return the student data as JSON for AJAX
                    Alert::success($body['message']);
                    return redirect()->back();
                } else {
                    Alert::error($body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }
    }

    public function itemCategoriesDelete( Request $request )
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/item-categories-delete';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'category_id' => $request->category_id,
                    
                ],
                
            ]);
          
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {

                    
                    // Return the student data as JSON for AJAX
                    Alert::success($body['message']);
                    return redirect()->back();
                } else {
                    Alert::error($body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }
    }

    
    
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

    public function addItems(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/item-categories-index';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
  
            ]);
          
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    $staff = $this->staffget($accessToken);
                    $allIteams = $this->alliteams($accessToken);
                    
                    $data = $body['data'];

                    // Return the student data as JSON for AJAX
                    return view('web.item-shop.add_item',compact('data','staff','allIteams'));
                } else {
                    Alert::error($body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

    }

    private function alliteams( $accessToken){
        
        $client = new Client(); 
        $url = env('API_GETWAY_URL') . '/api/v1/item-index';
        $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
  
            ]);

       
        return json_decode((string) $response->getBody(), true);
    }

    private function staffget( $accessToken){
        
        $client = new Client(); 
        $url = env('API_GETWAY_URL') . '/api/v1/all-staff';
        $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
  
            ]);

       
        return json_decode((string) $response->getBody(), true);
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


    public function addShopItems(Request $request){
        
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/item_store';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => $request->all(),
  
             ]);
          
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    
                    Alert::success($body['message']);
                    return redirect()->back();
                } else {
                    
                    Alert::error($body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

        
    }



    





}
