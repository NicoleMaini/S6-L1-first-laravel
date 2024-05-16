<?php

use App\Http\Controllers\ProvaController;
use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;


// gestione di indirizzi, come primo argomento rotta l'idirizzi, e come secondo parametro ritorna il contenuto che deve mostrate



Route::get('/', [ActivitiesController::class, 'home'])->name('activities.home');

Route::get('/activities/edit', [ActivitiesController::class, 'edit'])->name('activities.edit');
Route::get('/activities/add', [ActivitiesController::class, 'add'])->name('activities.add');

Route::get('/activities/{param}', [ActivitiesController::class, 'details'])->name('activities.details');

// Route::get('/activities-query-string', [ActivitiesController::class, 'requestParam'])->name('requestParam');

// Route::post - per form
// Route::put 
// Route::delete