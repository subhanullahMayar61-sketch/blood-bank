<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodBankController;
use App\Http\Controllers\index;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DonorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\BloodStockController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\SignUpController;

Route::get('/index',[index::class,'index']);
Route::get('/AboutUs',[AboutUsController::class,'About']);
Route::get('/Donor',[DonorsController::class,'Donors']);
Route::get('/Patient',[patientsController::class,'Patients']);
Route::get('/Blood_Stock',[BloodStockController::class,'BloodStock']);
Route::get('/ContactUs',[ContactUsController::class,'Contactus']);
Route::get('/login',[loginController::class,'Login']);
Route::get('/signUp',[SignUpController::class,'Signup']);

