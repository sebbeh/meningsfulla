<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppliedInterest;
use App\Mail\Contribute;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/om', function () {
    return view('about');
});

Route::get('/tjana-pengar', function () {
    return view('earn');
});

Route::get('/hockeyns-dag', function () {
    return view('hockeyns-dag');
});

Route::get('/samarbetspartners', function () {
    return view('collaborations');
});

Route::get('/bidra', function () {
    return view('contribute');
});

Route::get('/awaiting-payment/{id}', function($id) {
    return view('awaiting-payment', ['id' => $id]);
});

Route::get('/thank-you/{id}', function($id) {
    $order = App\Order::where('ordernumber', $id)->first();
    /*$start_time = time();

    $client = new Client();

    while($order->status == "CREATED") {
      $result = $client->request('GET','https://swicpc.bankgirot.se/swish-cpcapi/api/v1/paymentrequests/' . $order->payment_id, [
        //'http_errors' => false,
        'cert' => env('SWISH_CERT'),
        'ssl_key' => env('SWISH_CERT_KEY'),
        'verify' => env('SWISH_CA')
      ]);

      dd($result);

      if($result->getStatusCode() == "200") {
        $order->status = $result->input('status');
        $order->swish_response = $result->getBody();
        $order->save();
      }

      if($start_time - time() < 10000) {
        $order->status = "TIMEOUT";
        $order->save();
      }
    }*/
    return view('thank-you', ['order' => $order]);
});

Route::get('/get-status/{id}', function($id) {
    return App\Order::where('ordernumber', $id)->get()->toJson();
});

Route::post('/bidra','OrderController@create');

Route::post('/apply', function (Request $request) {
    Mail::to('kundtjanst@meningsfulla.se')->send(new AppliedInterest($request->input('email')));
    return back()->with('status','Din intresseanmälan har registrerats och du kommer bli meddelad så fort ny information kommer.');
});
