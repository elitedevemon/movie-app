<?php

use App\Http\Controllers\Visitor\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('video-category/{category:slug}', [CategoryController::class, 'show'])->name('video-category.show');