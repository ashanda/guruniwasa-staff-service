<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeesController extends Controller
{
    private $serverApiKey;
    public function __construct()
    {
        $this->serverApiKey = env('CLIENT_KEY');
       
    }
    public function feesView(Request $request)
    {

        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/pending-payments';
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
                    $pending_payments = $body['data']; // Extracting grades data from response
                    $pending_payments_count = count($body['data']);
                    
                    return view('web.fees.all_fees', ['pending_payments_count' => $pending_payments_count]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
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


    public function feesClassPending(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/pending-payments';
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
                    
                    $pending_payments = $body['data']; // Extracting grades data from response
                    $pending_payments_count = count($body['data']);
                    
                    return view('web.fees.fees_class_pending', ['pending_payments_count' => $pending_payments_count,'pending_payments' => $pending_payments]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
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
   







    public function classFeesErrorPayment()
    {
        try{

            return view('web.fees.error_payment');

        }catch(\Exception $exception){

            return;
        }
    }

    public function classFeesMonthlyBankPayment(){
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
            return view('web.fees.bank_monthly',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }

    }


        public function classFeesMonthlyCardPayment(){
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
            return view('web.fees.card_monthly',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }

    }
    public function classFeesBankPayment(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/payment-bank-history';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'month' => $request->month,
                    'payment_type' => $request->payment_type
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    
                    $payments = $body['data']; // Extracting grades data from response
                    
                   
                    return view('web.fees.bank_payment', ['payments' => $payments]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }


    }

     public function classFeesCardPayment(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/payment-bank-history';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'month' => $request->month,
                    'payment_type' => $request->payment_type
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    
                    $payments = $body['data']; // Extracting grades data from response
                    
                   
                    return view('web.fees.card_payment', ['payments' => $payments]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }

        
    }


    


    public function approve(Request $request) {
    // Logic for approving

       $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/approve-payment';
        $accessToken = $request->cookie('access_token');
        $staffData = session('staff_data');
        
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'staff_member' => $staffData['name'],
                    'payment_id' => $request->id,
                    'status' => $request->status
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    Alert::success('Approved', 'Payment Approved');
                    return redirect()->route('web.fees.class_pending');
                } else {
                    Alert::error('Error', $body['message']);
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            Alert::error('Error', $e);
           return back()->with('error', $e);
        }

    
    
    }

    public function reject(Request $request) {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/reject-payment';
        $accessToken = $request->cookie('access_token');
        $staffData = session('staff_data');
        
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'staff_member' => $staffData['name'],
                    'payment_id' => $request->id,
                    'status' => $request->status
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    Alert::success('Approved', 'Payment Rejected');
                    return redirect()->route('web.fees.class_pending');
                } else {
                    Alert::error('Error', $body['message']);
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            Alert::error('Error', $e);
           return back()->with('error', $e);
        }


        
    }

    public function addRemark(Request $request) {
        // Logic for adding a remark
        return response()->json(['message' => 'Remark Added']);
    }

    public function paymentHistory(Request $request)
    {
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/payment-history';
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
                    
                    $payments = $body['data']; // Extracting grades data from response
                    
                    
                    return view('web.fees.payment_history', ['payments' => $payments]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }

        
    }


    public function paymentHistorysearch(Request $request){
        
        $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/payment-history-search';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'month' => $request->month,
                    'payment_method' => $request->payment_method
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    
                    $payments = $body['data']; // Extracting grades data from response
                    
                    
                    return view('web.fees.payment_history', ['payments' => $payments]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        }
    }
    

    public function studentPaymentHistory(Request $request, $id){
       $client = new Client();
        
        $url = env('API_GETWAY_URL') . '/api/v1/student-payment-history';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->get($url, [
                'headers' => [ 
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'student_id' => $id
                ]
            ]);
           
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    
                    $payments = $body['data']; // Extracting grades data from response
                    
                   
                    return view('web.fees.student-payment_history', ['payments' => $payments]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
       } catch (\Exception $e) {
            
           return back()->with('error', $e);
        } 
    }



    public function classFeesPay(Request $request){
 

        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/manual-payment';
        $accessToken = $request->cookie('access_token');
        $currentDateTime = date('Y-m-d H:i:s');
        $inputMonth = $request->month; // Input like '8', '10', '11', '4'
        $year = now()->year; // You can change this to any specific year
        $day = '01'; // Default to the first day of the month

        // Convert month to two-digit format if needed
        $formattedMonth = str_pad($inputMonth, 2, '0', STR_PAD_LEFT);
        
        // Combine year, month, and day to form a date
        $payMonth = "{$year}-{$formattedMonth}-{$day}";
        
        $cartData = is_array($request->cartData) ? json_encode($request->cartData) : $request->cartData;
        $multipartData = [
        [
            'name'     => 'logged_user',
            'contents' => session('staff_data')['name'],
        ],    
        [
            'name'     => 'student_id',
            'contents' => $request->student_id,
        ],
        [
            'name'     => 'dateTime',
            'contents' => $currentDateTime,
        ],
        [
            'name'     => 'cartData',
            'contents' => $cartData,
        ],
        [
            'name'     => 'payment_method',
            'contents' => $request->payment_method,
        ],
        [
            'name'     => 'pay_month',
            'contents' => $payMonth,
        ],
    ];

   
        try {
            $response = $client->post($url, [
                'headers' => [
                     'Authorization' => 'Bearer ' . $accessToken,
                ],
                'multipart' => $multipartData,
            ]);
            
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    Alert::toast($body['message'], 'success');
                    return redirect()->back();
                }else{
                    Alert::toast($body['message'], 'error');
                    return redirect()->back();
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
        }
        
    }

    
}
