<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/form', [PageController::class, 'form']);
Route::post('/submit', [PageController::class, 'submit']);
