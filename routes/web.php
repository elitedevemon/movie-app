<?php

use App\Http\Controllers\TMDBController;
use App\Http\Controllers\Visitor\CommentController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::prefix('video')->name('video.')->group(function(){
  Route::get('/{video:slug}', [WelcomeController::class, 'check'])->name('check');
  Route::get('watch/{video:slug}', [WelcomeController::class, 'watch'])->name('watch');
  Route::resource('comment', CommentController::class)->only(['store', 'destroy']);
});

Route::get('tmdb', [TMDBController::class, 'index'])->name('tmdb');


require __DIR__ . '/auth.php';

//admin routes
require __DIR__ . '/admin.php';

// visitor routes
require __DIR__ . '/visitor.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
