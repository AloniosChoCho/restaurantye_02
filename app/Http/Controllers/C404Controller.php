<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C404Controller extends Controller
{
    public function index()
     {
        return view('frontend.404');
    }
}
