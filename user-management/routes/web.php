<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('users',[UserController::class,'users']);

Route::get('/students',[StudentController::class,"getStudent"]);

Route::get("usersView",[UserController::class,"getUser"]);

Route::get('queires',[UserController::class,'queires']);

// Route::get('newUser',[UserController::class,'get']);
Route::view('form', 'users');

Route::get('newUser', [UserController::class, 'get']);