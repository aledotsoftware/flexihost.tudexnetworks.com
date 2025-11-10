<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/plans', function () {
    return view('plans');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/support', function () {
    return view('support');
});

Auth::routes();
