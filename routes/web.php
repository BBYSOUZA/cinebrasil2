<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/sponsor', 'sponsor')->name('sponsor');
Route::view('/archives', 'archives')->name('archives');
