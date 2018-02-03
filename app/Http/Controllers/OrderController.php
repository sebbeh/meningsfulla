<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Order;
use App\Mail\Contribute;

class OrderController extends Controller
{
    public function create(Request $request) {
        $order = new Order;
        $order->ordernumber = uniqid();
        $order->firstname = $request->input('firstname');
        $order->lastname = $request->input('lastname');
        $order->careof = $request->input('careof');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->zipcode = $request->input('zipcode');
        $order->city = $request->input('city');
        $order->country = $request->input('country');
        $order->contents = [
            '37-40' => $request->input('count37'),
            '40-45' => $request->input('count40'),
        ];
        $order->save();

        $payeePaymentReference = $order->ordernumber;
        $amount = (149*$request->input('count37'))+(149*$request->input('count40'));
        if($order->email == 'sebbeh@gmail.com') {
          $amount = 1;
        }
        $payerAlias = $order->phone;
        if(substr($payerAlias,0,1) === "0") {
          $payerAlias = "46" . substr($payerAlias,1,strlen($payerAlias));
        }

        if(substr($payerAlias,0,4) === "0046") {
          $payerAlias = substr($payerAlias,2,strlen($payerAlias));
        }

        if(substr($payerAlias,0,1) === "+") {
          $payerAlias = substr($payerAlias,1,strlen($payerAlias));
        }

        $payeeAlias = env('SWISH_NUMBER');
        $callbackUrl = "https://meningsfulla.se/api/v1/swishcb/paymentrequests";
        $currency = "SEK";
        $message = "Gåva Barncancerfonden";

        $client = new Client(); //GuzzleHttp\Client
        $token = "";
        if($request->input('isphone') === 'false') {
          $result = $client->post('https://swicpc.bankgirot.se/swish-cpcapi/api/v1/paymentrequests', [
            'json' => [
                'payeePaymentReference' => $payeePaymentReference,
                'callbackUrl' => $callbackUrl,
                'payerAlias' => $payerAlias,
                'payeeAlias' => $payeeAlias,
                'amount' => $amount,
                'currency' => $currency,
                'message' => $message
            ],
            'cert' => env('SWISH_CERT'),
            'ssl_key' => env('SWISH_CERT_KEY'),
            'verify' => env('SWISH_CA')
          ]);
        } else {
          $result = $client->post('https://swicpc.bankgirot.se/swish-cpcapi/api/v1/paymentrequests', [
            'json' => [
                'payeePaymentReference' => $payeePaymentReference,
                'callbackUrl' => $callbackUrl,
                'payeeAlias' => $payeeAlias,
                'amount' => $amount,
                'currency' => $currency,
                'message' => $message
            ],
            'cert' => env('SWISH_CERT'),
            'ssl_key' => env('SWISH_CERT_KEY'),
            'verify' => env('SWISH_CA')
          ]);

          $token = $result->getHeader('PaymentRequestToken')[0];
        }

        //Mail::to($request->input('email'))->send(new Contribute($request));
        //Mail::to('kundtjanst@meningsfulla.se')->send(new Contribute($request));
        return redirect(url('/awaiting-payment/' . $payeePaymentReference))->with(['token' => $token,'callbackurl' => urlencode(url('/thank-you/' . $payeePaymentReference))]);
    }

    public function read(Order $order) {
        dd($order);
    }

    public function update(Order $order, Request $request) {
        $order->firstname = $request->input('firstname');
        $order->lastname = $request->input('lastname');
        $order->careof = $request->input('careof');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->zipcode = $request->input('zipcode');
        $order->city = $request->input('city');
        $order->country = $request->input('country');
        $order->contents = [
            '37-40' => $request->input('count37'),
            '40-45' => $request->input('count40'),
        ];
        $order->save();
    }

    public function delete(Order $order) {
        $order->delete();
    }

    public function getStatus(Order $order) {
        return $order->status;
    }

    public function setStatus(Order $order, $status) {
        $order->status = $status;
        $order->save();
    }
}
