<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppliedInterest;
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

Route::post('/apply', function (Request $request) {
    Mail::to(['mp@meningsfulla.se','cc@meningsfulla.se'])->send(new AppliedInterest($request->input('email')));
});
