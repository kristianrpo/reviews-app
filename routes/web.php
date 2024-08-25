<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/review/create', 'App\Http\Controllers\ReviewController@create')->name('review.create');
Route::post('/review/save', 'App\Http\Controllers\ReviewController@save')->name('review.save');
