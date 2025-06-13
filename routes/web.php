<?php

use App\Http\Controllers\MoneyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', [MoneyController::class , 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/postCreate', [MoneyController::class, 'create'])->name('postCreate');

Route::post('/remove/{id}', [MoneyController::class, 'remove'])->name('remove');
