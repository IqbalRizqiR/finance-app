<?php

use App\Http\Controllers\MoneyController;
use Illuminate\Support\Facades\Route;




Route::get('/', [MoneyController::class , 'index'])->name('home');
Route::post('/postCreate', [MoneyController::class, 'create'])->name('postCreate');

Route::post('/remove/{id}', [MoneyController::class, 'remove'])->name('remove');
