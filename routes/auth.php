<?php

use Illuminate\Support\Facades\Route;

Route::get("/register", function (){
    return "registration";
})->middleware('guest');

Route::get("/login", function (){
    return "login";
})->middleware('guest');


Route::post("/logout", function (){
    return "login";
})->middleware('auth');
