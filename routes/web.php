<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;


// gestione di indirizzi, come primo argomento rotta l'idirizzi, e come secondo parametro ritorna il contenuto che deve mostrate


// rotte pagine generali
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// rotte per la risorsa del sito

Route::get('/activities/index', [ActivitiesController::class, 'index'])->name('activities.index');
Route::get('/activities/add', [ActivitiesController::class, 'add'])->name('activities.add');
Route::get('/activities/{param}', [ActivitiesController::class, 'details'])->name('activities.details');
Route::get('/activities/{param}/edit', [ActivitiesController::class, 'edit'])->name('activities.edit');

// Route::get('/activities-query-string', [ActivitiesController::class, 'requestParam'])->name('requestParam');

// Route::post - per form
// Route::put 
// Route::delete