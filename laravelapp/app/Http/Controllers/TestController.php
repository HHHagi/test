<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function login(){
        $data =[];
        return view('test.login',$data);
    }

    public function register(){
        $data =[];
        return view('test.register',$data);
    }
}
