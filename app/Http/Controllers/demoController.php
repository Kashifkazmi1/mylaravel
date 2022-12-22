<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index()
    {
        return view('layouts.home');
    }
    public function about(){
        return view('layouts.about');
    }
}
