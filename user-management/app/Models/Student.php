<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    use HasFactory;
    protected $table = "new_table";

    function testFun(){
        return "this is dummy function";
    }
}
