<?php

use App\Http\Controllers\TMDBController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::get('tmdb', [TMDBController::class, 'index'])->name('tmdb');


require __DIR__ . '/auth.php';

//admin routes
require __DIR__ . '/admin.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
