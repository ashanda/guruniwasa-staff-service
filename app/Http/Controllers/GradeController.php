<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GradeController extends Controller
{
    //

    public function create(Request $request)
    {
         $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/create_grade';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'gname' => $request->gname
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

    public function update(Request $request, $id)
    {
         $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/update_grade';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'grade_id' => $id,
                    'gname' => $request->gname
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

    public function destroy(Request $request, $id)
    {
          $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/remove_grade';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'grade_id' => $id
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
