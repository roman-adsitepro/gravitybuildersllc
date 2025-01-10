<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('services', fn() => view('services'))->name('services');
Route::get('reviews', fn() => view('reviews'))->name('reviews');
Route::get('contact', fn() => view('contact'))->name('contact');
Route::get('about', fn() => view('about'))->name('about');
Route::get('faq', fn() => view('faq'))->name('faq');
Route::get('terms', fn() => view('terms'))->name('terms');
Route::get('privacy', fn() => view('privacy'))->name('privacy');

