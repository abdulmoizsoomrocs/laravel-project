<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greet(){
        $name = request()->query('name');
         
        return "Hello $name";
dd($name);
    }
}
