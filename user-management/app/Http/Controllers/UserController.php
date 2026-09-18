<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class UserController extends Controller
{

  
  function get(){
    return 'Get route method';
  }

  function post(){
    return 'post route method';
  }

  function put(){
    return 'put route method';
  }

  function delete(){
    return 'delete route method';
  }

    //
    // function users() {
    //     // return"User function";
    //     // return DB::select('select * from users');

    //     $users = DB::select('select * from users');
    //     return view('users',['users'=>$users]);
    // }

    // function getUser() {
    //     $response = Http::get('https://jsonplaceholder.typicode.com/users/1');

    //    $response = $response->body();
    //    return view('usersView',['data' => json_decode($response)]);
    // }

    // function queires() {

        // $result = DB::table('users')->get();

        // $result = [$result];
        // return view('users',['users' => $result]);

        // return $result;

        // $result = DB::table('users') -> insert([
        //     'name'=>"haman",
        //     'email'=>'tony@test.com',
        //     'phone'=>'111111'
        // ]);
        // if($result){
        //     return 'Date inserted';
        // } else {
        //     return "data not inerted";
        // }

        // update

        //   $result = DB::table('users') -> where('name','haman')->update(['phone' => 2222]);
        // if($result){
        //     return 'Date updated';
        // } else {
        //     return "data not updated";
        // }

    //   $result = DB::table('users') -> where('name','haman')->delete();
    //     if($result){
    //         return 'Date deleted';
    //     } else {
    //         return "data not deleted";
    //     }

    // $response = User::where('name','kay')->update(['phone','9999']);
    // if($response) {
    //     return 'data updated';
    // } else {
    //     return 'data was not updated';
    // }


    // }

}
