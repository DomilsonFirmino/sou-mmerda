<?php

use Illuminate\Support\Facades\Route;

Route::get('/solucoes', function () {
    return view('components.solucoes.index');
});
Route::get('/solucoes/gefor', function () {
    return view('components.solucoes.gefor');
});
Route::get('/solucoes/parceiros', function () {
    return view('components.solucoes.parceiros');
});
Route::get('/solucoes/siclic', function () {
    return view('components.solucoes.siclic');
});