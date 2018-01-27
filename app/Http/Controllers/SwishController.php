<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SwishController extends Controller
{

    public function pay() {
        $swishresponse = Client::post('https://swicpc.bankgirot.se/swishcpcapi/api/v1/paymentrequests',[
          'verify' => env('SWISH_CA'),
          'ssl_key' => env('SWISH_CERT_KEY'),
          'cert' => env('SWISH_CERT'),
          'json' => [
            'payeePaymentReference' => '0123456789',
            'callbackUrl' => 'https://meningsfulla.se/api/v1/swishcb/',
            'payeeAlias' => env('SWISH_NUMBER'),
            'amount' => '1',
            'currency' => 'SEK',
            'message' => 'Test'
          ]
        ]);

        dd($swishresponse);
    }

    public function done($paymentrequesttoken) {

    }

    public function callback(Request $request)
    {
        dd($request);
    }
}
