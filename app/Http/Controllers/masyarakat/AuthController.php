<?php

namespace App\Http\Controllers\masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //view login
    public function login()
    {
        return view('masyarakat.auth.login');
    }

    //view register
    public function register()
    {
        return view('masyarakat.auth.register');
    }
}
