<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{

    public function login(){
        return view('test.login');
    }

    public function register(){
        return view('test.register');
    }
}
