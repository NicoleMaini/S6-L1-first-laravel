<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvaController extends Controller
{
    function prova()
    { // i link di un sito
        return view('welcome');
    }
}
