<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;


use App\Http\Controllers\StudentController;


use App\Http\Middleware\AgesChecks;
use app\Http\Middleware\CountrysChecks;




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


// Route::get('adding',[StudentController::class,'adding']);
// Route::get('showing',[StudentController::class,'showing']);
// Route::get('delete',[StudentController::class,'delete']);

Route::controller(StudentController::class)->group(function() {
    
Route::get('adding','adding');
Route::get('showing','showing');
Route::get('delete','delete');
Route::get('about/{name}',"about");
});

// Route::get('about/{name}',[StudentController::class,"about"]);

// Route::view('about','about');


Route::view('newHome',"NewHome");




// Route::view('homeView','homeView')->middleware('check1');
// Route::view("aboutView","aboutView")->middleware('check1');

// Route::middleware('check1')->group(function(){
// Route::view('homeView','homeView');
// Route::view("aboutView","aboutView");
// });


Route::view('AboutViewPage',"AboutViewPage")->middleware(AgesChecks::class);

Route::view('HomeViewss','HomeV')->middleware([AgesChecks::class,CountrysChecks::class]);