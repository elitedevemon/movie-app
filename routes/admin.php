<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'verified', 'throttle'])->name('admin.')->group(function () {
  Route::prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // analytics routes
    Route::prefix('analytics')->name('analytics.')->group(function() {
      Route::get('/visitor-by-country', [AdminController::class, 'visitorByCountry'])->name('visitor_by_country');
      Route::get('social-media-share-analytics', [AdminController::class, 'socialMediaShareAnalytics'])->name('social-media-share-analytics');
    });

    // menus routes
    Route::resource('menus', MenuController::class);
    Route::controller(MenuController::class)->prefix('submenus')->name('submenus.')->group(function () {
      Route::get('edit/{submenu}', 'submenuEdit')->name('edit');
      Route::put('update/{submenu}', 'submenuUpdate')->name('update');
      Route::delete('destroy/{submenu}', 'submenuDestroy')->name('destroy');
    });

    // categories routes
    Route::resource('categories', CategoryController::class);

    // videos routes
    Route::resource('videos', VideoController::class);

    // article routes
    Route::resource('articles', ArticleController::class)->except('show');
  });
});