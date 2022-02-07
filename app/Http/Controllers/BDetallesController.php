<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BDetallesController extends Controller
{
    public function index()
     {
        return view('frontend.bdetalles');
    }
}