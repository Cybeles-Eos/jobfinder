<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoblistController;

/*
*   Static Pages
*/
Route::view('/', 'websites.home')->name('home');
Route::view('/about', 'websites.about')->name('about');
Route::view('/contact', 'websites.contact')->name('contact');

/*
*   Controllers Pages
*/
Route::get('/jobs', [JoblistController::class, 'index'])->name('jobs');
Route::get('/jobs/{title}', [JoblistController::class, 'show']);

Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news');
Route::get('/news/{title}', 'App\Http\Controllers\NewsController@show');