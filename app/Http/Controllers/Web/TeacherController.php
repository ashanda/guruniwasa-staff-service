<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    public function teachersSection()
    {
        try{

            return view('web.teachers.all_section');

        }catch(\Exception $exception){

            return;
        }
    }




    public function classIssues()
    {
        try{

                $months = [
                ["english" => "JANUARY", "local" => "ජනවාරි"],
                ["english" => "FEBRUARY", "local" => "පෙබරවාරි"],
                ["english" => "MARCH", "local" => "මාර්තු"],
                ["english" => "APRIL", "local" => "අප්‍රේල්"],
                ["english" => "MAY", "local" => "මැයි"],
                ["english" => "JUNE", "local" => "ජූනි"],
                ["english" => "JULY", "local" => "ජූලි"],
                ["english" => "AUGUST", "local" => "අගෝස්තු"],
                ["english" => "SEPTEMBER", "local" => "සැප්තැම්බර්"],
                ["english" => "OCTOBER", "local" => "ඔක්තෝබර්"],
                ["english" => "NOVEMBER", "local" => "නොවැම්බර්"],
                ["english" => "DECEMBER", "local" => "දෙසැම්බර්"]
            ];
            $currentMonth = date('n'); 

            return view('web.teachers.class_issues',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }
    }

    public function classIssuesView(Request $request)
    {
        $client = new Client();
            // Define the months array with English and local language names
        $months = [
            ["english" => "JANUARY", "local" => "ජනවාරි"],
            ["english" => "FEBRUARY", "local" => "පෙබරවාරි"],
            ["english" => "MARCH", "local" => "මාර්තු"],
            ["english" => "APRIL", "local" => "අප්‍රේල්"],
            ["english" => "MAY", "local" => "මැයි"],
            ["english" => "JUNE", "local" => "ජූනි"],
            ["english" => "JULY", "local" => "ජූලි"],
            ["english" => "AUGUST", "local" => "අගෝස්තු"],
            ["english" => "SEPTEMBER", "local" => "සැප්තැම්බර්"],
            ["english" => "OCTOBER", "local" => "ඔක්තෝබර්"],
            ["english" => "NOVEMBER", "local" => "නොවැම්බර්"],
            ["english" => "DECEMBER", "local" => "දෙසැම්බර්"]
        ];

        // Get the month from the request (default to 1 if not provided)
        $month = $request->query('month', 1);  // Default to January if no month provided

        // Ensure the month is within a valid range (1 to 12)
        if ($month < 1 || $month > 12) {
            return back()->with('error', 'Invalid month number.');
        }

        // Get the corresponding month details (adjusting index since arrays start at 0)
        $monthDetails = $months[$month - 1];
        $teachers = $this->getTeachers($request->cookie('access_token'));
        
        $url = env('API_GETWAY_URL') . '/api/v1/class-issues';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'month' => $request->month,
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    
                    $data = $body['data']; // Extracting grades data from response
                    
                    
                    return view('web.teachers.class_issues_view', compact('data', 'monthDetails', 'teachers'));
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }
    }


    private function getTeachers($accessToken){
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/all-teacher';
        
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                     return $body['teachers'];
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }
    }
    


    public function videoIssues()
    {
        try{

                $months = [
                ["english" => "JANUARY", "local" => "ජනවාරි"],
                ["english" => "FEBRUARY", "local" => "පෙබරවාරි"],
                ["english" => "MARCH", "local" => "මාර්තු"],
                ["english" => "APRIL", "local" => "අප්‍රේල්"],
                ["english" => "MAY", "local" => "මැයි"],
                ["english" => "JUNE", "local" => "ජූනි"],
                ["english" => "JULY", "local" => "ජූලි"],
                ["english" => "AUGUST", "local" => "අගෝස්තු"],
                ["english" => "SEPTEMBER", "local" => "සැප්තැම්බර්"],
                ["english" => "OCTOBER", "local" => "ඔක්තෝබර්"],
                ["english" => "NOVEMBER", "local" => "නොවැම්බර්"],
                ["english" => "DECEMBER", "local" => "දෙසැම්බර්"]
            ];
            $currentMonth = date('n'); 

            return view('web.teachers.video_issues',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }

        
    }

    public function videoIssuesView(Request $request)
    {
        $client = new Client();
            // Define the months array with English and local language names
        $months = [
            ["english" => "JANUARY", "local" => "ජනවාරි"],
            ["english" => "FEBRUARY", "local" => "පෙබරවාරි"],
            ["english" => "MARCH", "local" => "මාර්තු"],
            ["english" => "APRIL", "local" => "අප්‍රේල්"],
            ["english" => "MAY", "local" => "මැයි"],
            ["english" => "JUNE", "local" => "ජූනි"],
            ["english" => "JULY", "local" => "ජූලි"],
            ["english" => "AUGUST", "local" => "අගෝස්තු"],
            ["english" => "SEPTEMBER", "local" => "සැප්තැම්බර්"],
            ["english" => "OCTOBER", "local" => "ඔක්තෝබර්"],
            ["english" => "NOVEMBER", "local" => "නොවැම්බර්"],
            ["english" => "DECEMBER", "local" => "දෙසැම්බර්"]
        ];

        // Get the month from the request (default to 1 if not provided)
        $month = $request->query('month', 1);  // Default to January if no month provided

        // Ensure the month is within a valid range (1 to 12)
        if ($month < 1 || $month > 12) {
            return back()->with('error', 'Invalid month number.');
        }

        // Get the corresponding month details (adjusting index since arrays start at 0)
        $monthDetails = $months[$month - 1];
        $teachers = $this->getTeachers($request->cookie('access_token'));
        
        $url = env('API_GETWAY_URL') . '/api/v1/video-issues';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'month' => $request->month,
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    
                    $data = $body['data']; // Extracting grades data from response
                    
                    
                    return view('web.teachers.video_issues_view', compact('data', 'monthDetails', 'teachers'));
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }

     
    }





    public function teacherReviews()
    {
        try{

            return view('web.teachers.teacher_reviews');

        }catch(\Exception $exception){

            return;
        }
    }


    public function classAndVideoReport()
    {
        try{

            return view('web.teachers.class_video_report');

        }catch(\Exception $exception){

            return;
        }
    }




    public function classAndVideoAnalysing()
    {
        try{

            return view('web.teachers.class_video_analysing');

        }catch(\Exception $exception){

            return;
        }
    }


    public function classAndVideoSummery()
    {
        try{

            return view('web.teachers.class_video_summery');

        }catch(\Exception $exception){

            return;
        }
    }
    public function videoTimeTables(Request $request)
    {
         $client = new Client();
          $url = env('API_GETWAY_URL') . '/api/v1/all-teacher';
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
                    // Store token in a secure cookie
                    $teachers = $body['teachers'];
                    
                    return view('web.teachers.video_time_tables' ,compact('teachers'));
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }

        
    }

    public function introVideo(Request $request){
       try{
            $client = new Client();
            $url = env('API_GETWAY_URL') . '/api/v1/intro-video-teacher';
            $accessToken = $request->cookie('access_token');
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'teacher_id' => $request->teacher_id,
                    'video_url' => $request->video_url,
                ]
            ]);
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    Alert::toast($body['message'], 'success');
                    return redirect()->back();
                } else {
                    Alert::toast($body['message'], 'error');
                    return redirect()->back();

                }
            }   
        } catch (\Exception $e) {
             Alert::toast($e->getMessage(), 'error');
            return back()->with('error', $e);
        }
    }

    public function gradewiseTimeTables()
    {
        try{

            return view('web.teachers.grade_time_tables');

        }catch(\Exception $exception){

            return;
        }
    }
    public function teacherPayment()
    {
        try{

            return view('web.teachers.teacher_payment');

        }catch(\Exception $exception){

            return;
        }
    }
    public function teacherPaymentView()
    {
        try{

            return view('web.teachers.teacher_payment_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function paymentAnalysing()
    {
        try{

            return view('web.teachers.payment_analysing');

        }catch(\Exception $exception){

            return;
        }
    }

    public function paymentAnalysingGraph()
    {
        try{

            return view('web.teachers.payment_analysing_graph');

        }catch(\Exception $exception){

            return;
        }
    }

    public function ourTeacher(Request $request)
    {
          $client = new Client();
          $url = env('API_GETWAY_URL') . '/api/v1/all-teacher';
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
                    // Store token in a secure cookie
                    $teachers = $body['teachers'];
                    return view('web.teachers.our_teacher' ,compact('teachers'));
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }


    }


    public function scheduleClass()
    {
        try{

            return view('web.teachers.schedule_class');

        }catch(\Exception $exception){

            return;
        }
    }

    public function scheduleClassView()
    {
        try{

            return view('web.teachers.schedule_class_view');

        }catch(\Exception $exception){

            return;
        }
    }



    public function addGrade(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/grades';
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
                    return view('web.teachers.add_grade',compact('data'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

    }



    public function addSubject(Request $request,$id)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/grade_wise_subjects';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
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
                    $data = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                    return view('web.teachers.add_subject',compact('data','id'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

    }


    public function remark(Request $request){
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/class-remark';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'issue_id' => $request->issue_id,
                    'remark' => $request->remark,
                    'user_id' => session('staff_data')['id']
                ]
                
            ]);
           
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    $data = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                     Alert::toast($body['message'], 'success');
                    return redirect()->back();
                } else {
                    Alert::toast('Error', $body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
          Alert::error('Error', $e);  
          return back()->with('error', $e);

        }
    }


      public function Videoremark(Request $request){
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/video-remark';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'issue_id' => $request->issue_id,
                    'remark' => $request->remark,
                    'user_id' => session('staff_data')['id']
                ]
                
            ]);
           
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    $data = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                     Alert::toast($body['message'], 'success');
                    return redirect()->back();
                } else {
                    Alert::toast('Error', $body['message']);
                    return redirect()->back();
                }
            }
         } catch (\Exception $e) {
          Alert::error('Error', $e);  
          return back()->with('error', $e);

        }
    }



}
