<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class SendSMSController extends Controller
{
      public function index()
    {
       
        $receiverNumber = "RECEIVER_NUMBER";
        $message = "🚀 New Laravel Tutorial: Custom Login with Remember Me 👉 https://itstuffsolutiotions.io";
  
        try {
  
            $account_sid = getenv ("TWILIO_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            dd('SMS Sent Successfully.');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
