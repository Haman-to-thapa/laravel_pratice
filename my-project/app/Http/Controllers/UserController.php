<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function addUser(Request $request)
{
    $request->validate([
        'city' => 'required | min:3 | max:15',
        'gender' => 'required | email',
        'skill' => 'required | uppercase',
        'age' => 'required',
    ],[

    'age.required'=>'age must be 18+'


    ]);



    echo $request->city;
    echo "<br>";

    echo $request->gender;
    echo "<br>";

    print_r($request->skill);
    echo "<br>";

    echo $request->age;
}
}