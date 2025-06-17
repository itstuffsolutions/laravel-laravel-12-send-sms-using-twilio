<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendSMSController;
Route::get('/', function () {
    return view('welcome');
});
  
Route::get('sendSMS', [SendSMSController::class, 'index']);