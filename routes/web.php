<?php

Route::get('/', \App\Http\Controllers\Home::class)->name('home');
Route::get('/dashboard', \App\Http\Controllers\Dashboard::class)->name('dashboard')->middleware('auth');
Route::resource('mission', \App\Http\Controllers\Mission\MissionController::class);
Route::post('mission/{mission}/bid', \App\Http\Controllers\Mission\Bid::class)->name('mission.bid');
Route::post('mission/{mission}/cancel-bid', \App\Http\Controllers\Mission\CancelBid::class)->name('mission.cancel-bid');
Route::put('mission/{mission}/winner/{user}', \App\Http\Controllers\Mission\SetWinner::class)->name('mission.winner');
Route::put('mission/{mission}/complete', \App\Http\Controllers\Mission\Complete::class)->name('mission.complete');
Route::put('mission/{mission}/close', \App\Http\Controllers\Mission\Close::class)->name('mission.close');
Route::put('mission/{mission}/incomplete', \App\Http\Controllers\Mission\Incomplete::class)->name('mission.incomplete');
