<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog2Controller extends Controller
{
    public function index()
     {
        return view('frontend.blog-2');
    }
}
