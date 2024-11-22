<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/servicos/gestao', function () {
    return view('index');
});

Route::get('/servicos/formacao', function () {
    return view('index');
});

Route::get('/servicos/consultoria', function () {
    return view('index');
});

Route::get('/servicos/branding', function () {
    return view('index');
});


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


Route::get('/contatos', function () {
    return view('contatos');
});
Route::get('/eventos', function () {
    return view('eventos');
});
