<?php

use App\Http\Controllers\Usuario;
use Illuminate\Support\Facades\Route;


Route::get('/usuario', [Usuario::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

