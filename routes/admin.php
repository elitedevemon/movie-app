<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HelperController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\SettingsController;
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

    // manager routes
    Route::controller(ManagerController::class)->prefix('manager')->name('manager.')->group(function(){
      Route::get('list-manager', 'index')->name('index');
      Route::get('add-manager', 'addManager')->name('create');
      Route::post('store-manager', 'storeManager')->name('store');
    });

    // faq routes
    Route::resource('faqs', FaqController::class);
    Route::post('faqs/{id}/toggle-status', [FaqController::class, 'toggleStatus'])->name('admin.faqs.toggleStatus');

    // helpers routes
    Route::get('helpers', [HelperController::class, 'index'])->name('helpers.index');
    Route::post('helpers/reply/{helper:id}', [HelperController::class, 'reply'])->name('helpers.reply');
    Route::post('helpers/reject/{helper:id}', [HelperController::class, 'reject'])->name('helpers.reject');


    // country
    Route::resource('countries', CountryController::class);

    // settings
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('settings/update/{settings:id}', [SettingsController::class, 'update'])->name('settings.update');

    // notifications
    Route::post('notification/mark-as-read/{notification:id}', [NotificationController::class, 'markAsRead'])->name('notification.mark-as-read');
    Route::get('notification/view-all', [NotificationController::class, 'viewAll'])->name('notification.view-all');
    Route::post('notification/mark-all-as-read', [NotificationController::class, 'markAllAsRead'])->name('notification.mark-all-as-read');
  });
});