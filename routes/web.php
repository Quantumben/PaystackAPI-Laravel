<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paystack/pay', [App\Http\Controllers\PaystackPaymentController::class, 'index'])->name('paystack.index');
Route::post('/paystack/pay', [App\Http\Controllers\PaystackPaymentController::class, 'initiatePayment'])->name('paystack.pay');
Route::get('/paystack/callback', [App\Http\Controllers\PaystackPaymentController::class, 'handleCallback'])->name('paystack.callback');
