<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gallery2Controller extends Controller
{
    public function index()
     {
        return view('frontend.gallery2');
    }
}