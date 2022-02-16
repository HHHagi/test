<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateRequest;

class LoginRegisterController extends Controller
{

    public function login()
    {
        return view('laravel_views.login');
    }

    public function register()
    {
        return view('laravel_views.register');
    }

    public function post(ValidateRequest $request)
    {
        $name = $request->name;
        return view('laravel_views.home', compact('name'));
    }
}
