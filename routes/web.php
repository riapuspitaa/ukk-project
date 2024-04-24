<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;



Route::get('/', function () {
     return view('welcome');
 });

Route::get('/home', [App\Http\Controllers\DataController::class, 'index'])->name('home');
Route::resource('data', DataController::class);
