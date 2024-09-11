<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clients', function () {
    return view('clients');
});

Route::get('/travels', [TravelController::class, 'view']);
Route::post('/travels/create', [TravelController::class, 'create'])->name('travels.create');
Route::get('/travels/edit/{id}', [TravelController::class, 'edit'])->name('travels.edit');
Route::put('/travels/update/{id}', [TravelController::class, 'update'])->name('travels.update');
Route::delete('/travels/delete/{id}', [TravelController::class, 'destroy'])->name('travels.delete');
