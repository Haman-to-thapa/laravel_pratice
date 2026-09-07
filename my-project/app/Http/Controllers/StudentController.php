<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function showing() {
        return "List of studenta";
    }

     function adding() {
        return "List of studenta";
    }

     function delete() {
        return "List of studenta";
    }

    
     function about($name) {
        return $name;
    }
}
