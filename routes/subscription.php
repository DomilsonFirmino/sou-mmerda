<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;


Route::get('/subscribe', [SubscriberController::class,"store"]);
Route::get('/subscribe/{hash}', [SubscriberController::class,"verify"]);
Route::get('/unsubscribe/{delete}', [SubscriberController::class,"cancel"]);
