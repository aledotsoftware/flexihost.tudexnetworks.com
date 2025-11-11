<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/plans', [PublicController::class, 'plans'])->name('plans');

Route::get('/features', [PublicController::class, 'features'])->name('features');

Route::get('/demo', [PublicController::class, 'demo'])->name('demo');

Route::get('/support', [PublicController::class, 'support'])->name('support');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
