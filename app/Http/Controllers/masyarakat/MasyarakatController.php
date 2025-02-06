<?php

namespace App\Http\Controllers\masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    //View LandingPage
    public function index()
    {
        return view('masyarakat.Page.index');
    }
}
