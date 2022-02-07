<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProxController extends Controller
{
    public function index()
     {
        return view('frontend.Prox');
    }
}
