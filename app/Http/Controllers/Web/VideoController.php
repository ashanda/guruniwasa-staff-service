<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
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


    public function videoStudentLms(Request $request)
    {

        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/intro-student';
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
                    $studentsLMS = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                     return view('web.videos.student_lms',compact('studentsLMS'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
        } catch (\Exception $e) {
            
          return back()->with('error', $e);
       }

    }

    public function videoTeacherLms(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/intro-teacher';
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
                    $teacherLMS = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                     return view('web.videos.teacher_lms',compact('teacherLMS'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

       
    }


    public function videoAdminLms(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/intro-staff';
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
                    $staffLMS = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                     return view('web.videos.admin_lms',compact('staffLMS'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

        
    }





    public function videoSuperAdminLms(Request $request)
    {
                $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/intro-admin';
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
                    $adminLMS = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                     return view('web.videos.super_admin_lms',compact('adminLMS'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

        
        
    }



}
