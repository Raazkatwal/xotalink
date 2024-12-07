<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;


Route::view('/', 'home');

Route::post('/shorten', [UrlController::class, 'shorten']);
Route::get('/{code}', [UrlController::class, 'redirect']);
