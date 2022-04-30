<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/email', function () {

    Mail::to('izdiharizdihar@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::get('/hello','HelloController@index');
Route::get('/about','HelloController@about');


Route::get('/service','ServiceController@index');

Route::post('/service','ServiceController@store');
