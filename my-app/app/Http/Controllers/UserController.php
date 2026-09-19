<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // function login(Request $request)
    // {
        //     echo 'Request method is ',$request->method();
        //     echo '<br/>';
        //     echo "Requset Path is " ,  $request->path();
        //     echo '<br/>';
        //     echo 'Request url i ', $request->url();
        //     echo '<br/>';
        //     echo 'Name is ',$request->input('name');
        //     echo '<br/>';
        //     echo 'Name is ',$request->name;
        //     echo '<br/>';
        //     print_r($request->input());
        //     echo '<br/>';
        //     print_r($request->collect());
        //     echo "<br/>";
        //     if($request->isMethod('post')){
        //         echo 'Exected code for post request';
        //     } else {
        //         echo 'Ecected code for other post';
        //     }
        // echo '<br/>';
        // echo 'ip address is ', $request->ip();

    //     $request->session()->put('user', $request->input('user'));

    //     $request->session()->put('allData',$request->input());

    //     echo session('user');
    //     return redirect('profile');
    // }

    function logout() {
        session()->pull('user');
        return redirect('profile');
    }
public function addUser(Request $request)
// public function addUser(Request $request)
{
    $request->session()->flash(
        'message',
        'User had been added successfully'
    );

    return redirect('/adduser');
}
}
