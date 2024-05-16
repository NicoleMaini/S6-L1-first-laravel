<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function home()
    { // callback - funzione che vengono passate come parametro ad altr funzioni
        return view('home');
    }

    public function details($param) // parametri passati tramite path
    { // callback - funzione che vengono passate come parametro ad altr funzioni
        return 'ecco il parametro: ' . $param;
    }

    public function add() // parametri passati tramite path
    { // callback - funzione che vengono passate come parametro ad altr funzioni
        return view('add');
    }

    public function edit(Request $request) // parametri passati tramite query string path?p1=paratro1&p2=parametro2
    { // callback - funzione che vengono passate come parametro ad altr funzioni
        $all = $request->all();
        // var_dump($all);
        return view('edit');
    }
}
