<?php

use App\Http\Controllers\MoneyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', [MoneyController::class , 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/setting', [ProfileController::class, 'setting'])->name('setting');
Route::post('/postCreate', [MoneyController::class, 'create'])->name('postCreate');
Route::post('/moneyPost', [ProfileController::class, 'storeSource'])->name('moneyPost');

Route::post('/remove/{id}', [MoneyController::class, 'remove'])->name('remove');
