<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Usuario   extends Controller
{
    public function index() : View
    {
        return view('usuario.index');
    }
}
