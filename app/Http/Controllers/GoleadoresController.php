<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoleadoresController extends Controller
{
    public function index()
    {
        return view('goleadores.index');
    }
}
