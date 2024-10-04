<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getSearchOptions(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/students-search';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ]
            ]);
          
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                   
                    $options = $body['students']; // Extracting grades data from response
                    
                    if ($request->has('q')) {
                        $query = $request->input('q');
                        $options = array_filter($options, function ($option) use ($query) {
                            // Check if 'relatedData' and 'grade' exist to access 'gname'
                            $gradeName = isset($option['relatedData']['grade']['gname']) 
                                ? $option['relatedData']['grade']['gname'] 
                                : '';

                            // Check if the query matches full_name, grade name, or username
                            return stripos($option['full_name'], $query) !== false || 
                                stripos($gradeName, $query) !== false ||
                                stripos($option['username'], $query) !== false;
                        });
                    }

                    // Transform the filtered options to match the Select2 expected format
                    $formattedOptions = array_map(function ($option) {
                        // Check if 'relatedData' and the nested 'grade' exist
                        $gradeName = isset($option['relatedData']['grade']['gname']) 
                            ? $option['relatedData']['grade']['gname'] 
                            : 'Unknown Grade';
                        
                        return [
                            'id' => $option['id'],
                            'text' => $option['full_name'] . ' - ' . $gradeName . ' - ' . $option['username']
                        ];
                    }, $options);

                    return response()->json(['items' => array_values($formattedOptions)]);

                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }


    }


    public function getStudentData(Request $request, $id){

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
                    return response()->json($student);
                } else {
                    return response()->json(['error' => $body['message']], 400);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }

        
        
    }
}
