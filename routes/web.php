<?php

declare(strict_types=1);

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::name('site.')->group(function () {
        Route::controller(SiteController::class)->group(function () {
            Route::get('/', 'index')->name('main');
            Route::get('/contacts', 'contacts')->name('contacts');
        });
    });

    Route::prefix('themes')->name('themes.')->group(function () {
        Route::controller(ThemeController::class)->group(function () {
            Route::post('/', 'update')->name('update');
        });
    });
});
