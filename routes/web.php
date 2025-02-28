<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\weaterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("weather",[weaterController::class,'index']);
