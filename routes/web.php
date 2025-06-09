<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;

Route::group([
    // This injects the locale (de, en, pt-BR) into the URL prefix:
    'prefix'     => LaravelLocalization::setLocale(),

    // Use the middleware *classes* directly—no need for aliases:
    'middleware' => [
         LocaleSessionRedirect::class,
        LaravelLocalizationRedirectFilter::class,
    ],
], function() {
    // Your localized routes:
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::view('/über_uns', 'über_uns')->name('über-uns');
    Route::view('/20-jahre', 'anniversary')->name('anniversary');
    Route::view('archiv', 'archive')->name('archive');
    Route::get('/archive', [App\Http\Controllers\ArchiveController::class, 'index'])->name('archive.index');
    Route::get('/archive/{slug}', [App\Http\Controllers\ArchiveController::class, 'show'])->name('archive.show');
    Route::view('/impressum', 'impressum')->name('impressum');
    Route::view('/kontakt', 'contact')->name('contact');
    Route::view('/unter-bau', 'under-construction')->name('under-construction');
});