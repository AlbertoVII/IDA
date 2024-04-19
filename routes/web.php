<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\DragDropController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PropiedadesController;

Route::get('/', function () {
    return redirect('/login');
});

Route::resource('users', UserController::class)->names('admin.user');

Route::resource('propiedades', PropiedadesController::class);
Route::resource('files', FileController::class);
Route::resource('bids', BidController::class);
Route::resource('mensajes', MensajeController::class);

// Route::post('propiedades/create', [PropiedadesController::class, 'create']); 

Route::get('drag-drop-form', [DragDropController::class, 'form']);
Route::post('uploadFiles', [DragDropController::class, 'uploadFiles']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('can')->name('dashboard');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
