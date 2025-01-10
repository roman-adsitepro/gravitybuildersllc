<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('services', fn() => view('services'))->name('services');
Route::get('reviews', fn() => view('reviews'))->name('reviews');
Route::get('contact', fn() => view('contact'))->name('contact');
Route::get('about', fn() => view('about'))->name('about');

