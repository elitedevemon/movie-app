<?php

use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TMDBController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('tmdb', [TMDBController::class, 'index'])->name('tmdb');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';

//admin routes
Route::prefix('admin')->name('admin.')->group(function () {
  Route::prefix('dashboard')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/videos', VideoController::class);
  });
});
