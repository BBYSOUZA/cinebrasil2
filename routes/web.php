<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/20-years', '20-years')->name('20-years');
Route::view('/archive', 'archive')->name('archive');
Route::view('/impressum', 'impressum')->name('impressum');
Route::view('/contact-us', 'contact-us')->name('contact-us');
Route::view('/under-construction', 'under-construction')->name('under-construction');
