<?php

Route::get('/', \App\Http\Controllers\Home::class)->name('home');
Route::get('/dashboard', \App\Http\Controllers\Dashboard::class)->name('dashboard')->middleware('auth');
Route::resource('mission', \App\Http\Controllers\MissionController::class);
