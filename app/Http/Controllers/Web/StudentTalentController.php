<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class StudentTalentController extends Controller
{
    //
    public function studentTalent()
    {
        try{

            return view('web.student_talents.view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function studentDetails(Request $request, $id)
    {
         $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/single-student';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'student_id' => $id
                ]
            ]);
          
                if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
               
                if (isset($body['status']) && $body['status'] === 200) {
                    $student = $body['data'];
                    
                    // Return the student data as JSON for AJAX
                    return view('web.student_talents.details',compact('student'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
         } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }

    }

    public function allstudentDetails(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/all-student';
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
                    $students = $body['students'];
                    
                    // Return the student data as JSON for AJAX
                    return view('web.student_talents.details-all',compact('students'));
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
         } catch (\Exception $e) {
            
          return back()->with('error', $e);
        }

    }
    

    public function inactiveAccounts()
    {
        try{

            return view('web.student_talents.inactive_account');

        }catch(\Exception $exception){

            return;
        }
    }



    public function nonPaidAccounts()
    {
        try{

            return view('web.student_talents.non_paid_account');

        }catch(\Exception $exception){

            return;
        }
    }

    public function scholarshipDetails()
    {
        try{

            return view('web.student_talents.scholarship');

        }catch(\Exception $exception){

            return;
        }
    }


    public function scholarshipAdd()
    {
        try{

            return view('web.student_talents.add_scholarship');

        }catch(\Exception $exception){

            return;
        }
    }


    public function recAccess()
    {
        try{

            return view('web.student_talents.rec_access');

        }catch(\Exception $exception){

            return;
        }
    }


    public function AddRecAccess()
    {
        try{

            return view('web.student_talents.add_rec_access');

        }catch(\Exception $exception){

            return;
        }
    }




    public function allCertificate()
    {
        try{

            return view('web.student-certificate.all_certificate');

        }catch(\Exception $exception){

            return;
        }
    }
    public function pendingCertificate()
    {
        try{

            return view('web.student-certificate.pending_certificate');

        }catch(\Exception $exception){

            return;
        }
    }
    
    public function approvedCertificate()
    {
        try{

            return view('web.student-certificate.approved_certificate');

        }catch(\Exception $exception){

            return;
        }
    }
    
    public function allApprovedCertificate()
    {
        try{

            return view('web.student-certificate.all_approved_certificate');

        }catch(\Exception $exception){

            return;
        }
    }
    public function subjectwiseVideos()
    {
        try{

            return view('web.student-certificate.subjectwise_videos');

        }catch(\Exception $exception){

            return;
        }
    }
    
    


    public function otherTalent()
    {
        try{

            return view('web.student-certificate.other_talent');

        }catch(\Exception $exception){

            return;
        }
    }
    

    public function allOtherTalent()
    {
        try{

            return view('web.student-certificate.all_other_talent');

        }catch(\Exception $exception){

            return;
        }
    }
    






    
}
