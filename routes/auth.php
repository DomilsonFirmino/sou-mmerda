<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("/register", [AuthController::class,'register'])->middleware('guest');
Route::post("/register", [AuthController::class,'registerStore'])->middleware('guest');

Route::get("/login",[AuthController::class,'login'])->middleware('guest')->name("login");
Route::post("/login",[AuthController::class,'loginStore'])->middleware('guest');

Route::post("/logout", [AuthController::class,'destroy'])->middleware('auth');

Route::get("/profile", function(){
    return view("components.admin.profile");
})->middleware("auth");
