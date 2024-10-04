<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class SubjectController extends Controller
{
    public function create(Request $request)
    {
       
        $client = new Client(); 
        $url = env('API_GETWAY_URL') . '/api/v1/create_subject';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'sname' => $request->sname,
                    'gid' => $request->gid,
                    'tid' => $request->tid,
                    'fee' => $request->fee,
                    'whats_app' => $request->whats_app,
                    'retention' => $request->retention,
                    'class_type' => $request->class_type,
                    "day_normal" => $request->day_normal,
                    "start_normal" => $request->start_normal,
                    "end_normal" => $request->end_normal,
                    "day_extra1" => $request->day_extra1,
                    "start_extra1" => $request->start_extra1,
                    "end_extra1" => $request->end_extra1,
                    "start_extra2" => $request->start_extra2,
                    "end_extra2" => $request->end_extra2               
                ]
            ]);
         
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
               
                if (isset($body['status']) && $body['status'] === 200) {                    
                    // Return the student data as JSON for AJAX

                    Alert::toast($body['message'], 'success');
                    return redirect()->back();
                } else {
                     Alert::toast($body['message'], 'error');
                     return redirect()->back();
                   
                }
            }
         } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }
    }

    public function update(Request $request){
       $client = new Client(); 
        $url = env('API_GETWAY_URL') . '/api/v1/update_subject';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'sid' => $request->sid,
                    'tid' => $request->tid,
                    'sname' => $request->sname,
                    'gid' => $request->gid,
                    'fee' => $request->fee,
                    'whats_app' => $request->whats_app,
                    'retention' => $request->retention,
                    'class_type' => $request->class_type,
                    "day_normal" => $request->day_normal,
                    "start_normal" => $request->start_normal,
                    "end_normal" => $request->end_normal,
                    "day_extra1" => $request->day_extra1,
                    "start_extra1" => $request->start_extra1,
                    "end_extra1" => $request->end_extra1,
                    "start_extra2" => $request->start_extra2,
                    "end_extra2" => $request->end_extra2               
                ]
            ]);
         
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
               Log::info($body);
                if (isset($body['status']) && $body['status'] === 200) {                    
                    // Return the student data as JSON for AJAX

                    Alert::toast($body['message'], 'success');
                    return redirect()->back();
                } else {
                     Alert::toast($body['message'], 'error');
                     return redirect()->back();
                   
                }
            }
         } catch (\Exception $e) {
            
           return back()->with('error', $e);
        } 
    }

    public function destroy(Request $request)
    {
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/delete_subject';
        $accessToken = $request->cookie('access_token');
       try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'sid' => $request->sid,
                ]
            ]);
         
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
               
                if (isset($body['status']) && $body['status'] === 200) {
                    $student = $body['data'];                       
                    // Return the student data as JSON for AJAX
                    Alert::toast($body['message'], 'success');
                    return redirect()->back();
                } else {
                     Alert::toast($body['message'], 'error');
                     return redirect()->back();
                   
                }
            }
         } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }
    }
}
