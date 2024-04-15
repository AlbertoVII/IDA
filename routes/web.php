<?php

use App\Http\Controllers\PropiedadesController;
use App\Htttp\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('propiedades', PropiedadesController::class);


Route::get('propiedades', [PropiedadesController::class, 'index'])->name('propiedades');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
