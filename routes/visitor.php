<?php

use App\Http\Controllers\Visitor\CategoryController;
use App\Http\Controllers\VisitorTrackingController;
use Illuminate\Support\Facades\Route;

Route::get('video-category/{category:slug}', [CategoryController::class, 'show'])->name('video-category.show');

// visitor location by country
Route::post('visitor-by-country', [VisitorTrackingController::class, 'trackVisitorByCountry'])->name('track-visitor-by-country');