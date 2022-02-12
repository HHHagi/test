<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateRequest;

class LoginRegisterController extends Controller
{

    public function login()
    {
        return view('test.login');
    }

    public function register()
    {
        return view('test.register');
    }

    public function post(ValidateRequest $request)
    {
        return view('test.home', ['name' => $request->name]);
    }
}
