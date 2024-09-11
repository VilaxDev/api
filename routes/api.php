<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\ClientController;


Route::get('/travels', [TravelController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);