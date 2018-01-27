<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppliedInterest;
use App\Mail\Contribute;
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

Route::post('/bidra', function (Request $request) {
    Mail::to($request->input('email'))->send(new Contribute($request));
    Mail::to('kundtjanst@meningsfulla.se')->send(new Contribute($request));
    return back()->with('status','Tack för din beställning! Glöm inte att även swisha ditt bidrag.');
});

Route::post('/apply', function (Request $request) {
    Mail::to('kundtjanst@meningsfulla.se')->send(new AppliedInterest($request->input('email')));
    return back()->with('status','Din intresseanmälan har registrerats och du kommer bli meddelad så fort ny information kommer.');
});
