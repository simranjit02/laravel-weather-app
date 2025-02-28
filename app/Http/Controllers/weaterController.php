<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weaterController extends Controller
{
    public function index(){
        return view('weather');
    }
}
