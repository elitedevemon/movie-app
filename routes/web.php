<?php

use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TMDBController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('tmdb', [TMDBController::class, 'index'])->name('tmdb');


require __DIR__ . '/auth.php';

//admin routes
Route::prefix('admin')->middleware(['auth', 'verified', 'throttle'])->name('admin.')->group(function () {
  Route::prefix('dashboard')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/videos', VideoController::class);
  });
});

Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
