<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/user-form', 'user-form');

Route::post('adduser',[UserController::class,"addUser"]);




Route::prefix('student')->group(function() {
Route::view('home','home');
Route::get('show',[HomeController::class,'show']);
Route::get('add',[HomeController::class,"add"]);
});


Route::view('about','about');