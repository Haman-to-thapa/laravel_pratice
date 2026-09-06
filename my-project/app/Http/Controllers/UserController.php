<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function addUser(Request $request)
{
    $request->validate([
        'city' => 'required',
        'gender' => 'required',
        'skill' => 'required',
        'age' => 'required',
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