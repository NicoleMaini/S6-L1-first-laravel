<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivitiesController extends Controller
{
    public function index()
    {
        // callback - funzione che vengono passate come parametro ad altr funzioni
        // $activities = Activity::all();
        $activities = Activity::paginate();
        // $countAct = Activity::where('column', 'value')->get(); per prendere una lista di cose che corrisoindono ai valori inseriti
        // $countAct = Activity::where()->count(); per contare gli elementi presenti nella tabella in db
        // $countAct = Activity::where()->max('column'); per vedere ad esempio il presso massimo, ma bisogna specificare la colonna in cui cercare

        // dd($products);  // si vede direttamente il suo risultato e non la vista
        // dump($products); // si vede il risultato e la vista
        // ddd($products); // riassunto completo di quello che sta avvenedo lato server

        return view('activities.index', ['activities' => $activities]);
    }

    public function details($param)
    {
        // $activity = Activity::find($param);
        $activity = Activity::findOrFail($param); // ovvero che se il parametro passato non esiste rimandaa alla pg 404
        // per utilizzare una colonna diversa
        // $activity = Activity::firstWhere('title', $title)
        // $activity = Activity::firstWhere('param', $param) - al posto del parametro gli passiamo il nome della colonna e come secondo il valore e ritorna solo il primo valore coicidente

        // parametri passati tramite path
        // callback - funzione che vengono passate come parametro ad altr funzioni
        return view('activities.details', ['activity' => $activity]);
    }

    public function add()
    {
        // parametri passati tramite path
        // callback - funzione che vengono passate come parametro ad altr funzioni
        return view('activities.add');
    }

    //public function edit(Request $request) // parametri passati tramite query string path?p1=paratro1&p2=parametro2
    // {  callback - funzione che vengono passate come parametro ad altr funzioni
    //     $all = $request->all();
    //     var_dump($all);
    // }

    public function store(Request $request)
    {
        $data = $request->all();
        // salvare i dati nel database
        $newActivity = new Activity();
        $newActivity->title = $data['title'];
        $newActivity->hour = $data['hour'];
        $newActivity->date = $data['date'];
        $newActivity->description = $data['description'];
        $newActivity->user_id = $request->user()->id;
        $newActivity->save();
        // Book::insert

        // ridirezionare
        return redirect()->route('activities.index');
    }

    public function edit($param)
    {
        $activity = Activity::findOrFail($param);
        if (Auth::user()->id !== $activity->user_id) {
            abort(401);
        }
        return view('activities.edit', compact('activity')); // equivalente di ['activity' => $activity]
        // return view('activities.edit', compact('param')); // ritorna in pagina il parametro con lo stesso nome
    }

    public function update(Request $request, $param)
    {
        $data = $request->all();
        // dd($data);

        // validare i dati
        // TODO: risolvere errore del campo duplicato con le validazioni

        // aggiornare i dati nel database
        $activity = Activity::findOrFail($param);
        if ($request->user()->id !== $activity->user_id) {
            abort(401);
        }

        $activity->title = $data['title'];
        $activity->hour = $data['hour'];
        $activity->date = $data['date'];
        $activity->description = $data['description'];
        $activity->update();

        // ridirezionare
        return redirect()->route('activities.details', ['param' => $param]);
    }

    public function destroy($param)
    {
        $activity = Activity::findOrFail($param);

        if (Auth::user()->id !== $activity->user_id) {
            abort(401);
        }

        $activity->delete();

        return redirect()->route('activities.index')->with('success', $activity);
    }
}
