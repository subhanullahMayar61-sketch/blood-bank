<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',function(){
    return view('index');
});

Route::get('login',function(){
    return view('login');
});

Route::get('Donor',function(){
    return view('Donor');
});

Route::get('ContactUs',function(){
    return view('ContactUs');
});

Route::get('Blood_Stock',function(){
    return view('Blood_Stock');
});

Route::get('AboutUs',function(){
    return view('AboutUs');
});

Route::get('Privacy',function(){
    return view('Privacy');
});

Route::get('signUp',function(){
    return view('signUp');
});

Route::get('TermAndService',function(){
    return view('TermAndService');
});

Route::get('Patient',function(){
    return view('Patient');
});


