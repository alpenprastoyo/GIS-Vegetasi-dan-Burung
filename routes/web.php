<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MyTest;

Route::get('/', MyTest::class)->name('test');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', MyTest::class)->name('test');
