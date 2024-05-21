<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;

// rotte accessibili da tutti
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities.index');

// rotte accessibili solo da loggati e autenticati
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/activities/add', [ActivitiesController::class, 'add'])->name('activities.add');
    Route::get('/activities/{param}/edit', [ActivitiesController::class, 'edit'])->name('activities.edit');
    Route::post('/activities', [ActivitiesController::class, 'store'])->name('activities.store');
    Route::put('/activities/{param}', [ActivitiesController::class, 'update'])->name('activities.update');
    Route::delete('/activities/{param}', [ActivitiesController::class, 'destroy'])->name('activities.destroy');
});

Route::get('/activities/{param}', [ActivitiesController::class, 'details'])->name('activities.details');
// rotte accessibili solo da loggati
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// rotte accessibili solo da non loggati
Route::middleware('guest')->group(function () {});

require __DIR__ . '/auth.php';

// rotte per la risorsa del sito

// Route::resource('activities', ActivitiesController::class);
