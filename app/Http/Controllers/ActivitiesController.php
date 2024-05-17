<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    { // callback - funzione che vengono passate come parametro ad altr funzioni
        return view('activities.index');
    }

    public function details($param) // parametri passati tramite path
    { // callback - funzione che vengono passate come parametro ad altr funzioni
        return 'ecco il parametro: ' . $param;
    }

    public function add() // parametri passati tramite path
    { // callback - funzione che vengono passate come parametro ad altr funzioni
        return view('activities.add');
    }

    //public function edit(Request $request) // parametri passati tramite query string path?p1=paratro1&p2=parametro2
    // {  callback - funzione che vengono passate come parametro ad altr funzioni
    //     $all = $request->all();
    //     var_dump($all);
    // }
    public function edit($param)
    {
        return view('activities.edit', ['param' => $param]); // ritorna in pagina il valore se inserito tra doppie grafe
        // return view('activities.edit', compact($param)); // ritorna in pagina il parametro con lo stesso nome
    }
}
