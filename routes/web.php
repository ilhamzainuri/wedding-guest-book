<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/guestbook/create', [GuestController::class, 'create'])->name('guestbook.create');
Route::post('/guestbook', [GuestController::class, 'store'])->name('guestbook.store');
