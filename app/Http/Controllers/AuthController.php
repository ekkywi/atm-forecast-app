<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function activate()
    {
        return view('auth.activate');
    }

    public function app()
    {
        return view('layouts.app');
    }
}
