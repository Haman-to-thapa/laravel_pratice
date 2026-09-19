<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $path = $request->file('file')->storeAs('uploads', 'public');

        return view('display', ['path' => $path]);
    }
}