<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contribute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route is blocked by NGINX server for all IPs except 194.242.111.220
Route::prefix('v1')->group(function () {
    Route::prefix('swishcb')->group(function () {
        Route::post('paymentrequests/{id}', function(Request $request, $id) {
            Log::info('Received payment status.', ['request' => $request->getContent()]);
            $order = Order::where('ordernumber', $id)->first();
            $order->status = $request->input('status');
            $order->swish_response = $request->getContent();
            $order->save();

            if($order->status == "PAID") {
              Mail::to($order->email)->send(new Contribute($order));
              Mail::to('kundtjanst@meningsfulla.se')->send(new Contribute($order));
            }
        });
    });
});
