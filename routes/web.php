<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'form_bookings'])->name('main');

Route::post('/', [MainController::class, 'store_bookings'])->name('booking.store');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

