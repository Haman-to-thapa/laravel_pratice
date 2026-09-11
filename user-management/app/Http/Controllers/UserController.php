<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function users() {
        // return"User function";
        // return DB::select('select * from users');

        $users = DB::select('select * from users');
        return view('users',['users'=>$users]);
    }

    function getUser() {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');

       $response = $response->body();
       return view('usersView',['data' => json_decode($response)]);
    }
}
