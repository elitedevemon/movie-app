<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'verified', 'throttle'])->name('admin.')->group(function () {
  Route::prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

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
  });
});