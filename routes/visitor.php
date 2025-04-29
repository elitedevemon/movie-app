<?php

use App\Http\Controllers\Visitor\CategoryController;
use App\Http\Controllers\VisitorTrackingController;
use Illuminate\Support\Facades\Route;

Route::get('video-category/{category:slug}', [CategoryController::class, 'show'])->name('video-category.show');

// visitor location by country
Route::post('visitor-by-country', [VisitorTrackingController::class, 'trackVisitorByCountry'])->name('track-visitor-by-country');

// track visitor by page views
Route::post('visitor-by-page-view/{video:slug}', [VisitorTrackingController::class, 'trackVisitorByPageView'])->name('track-visitor-by-page-view');

// track visitor by category views
Route::post('visitor-by-category-view/{video:slug}', [VisitorTrackingController::class, 'trackVisitorByCategoryView'])->name('track-visitor-by-category-view');

// get traffic source
Route::post('traffic-source-by-social-media/{video?}', [VisitorTrackingController::class, 'trackTrafficSource'])->name('track-visitor-using-share-source');