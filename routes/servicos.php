<?php

use Illuminate\Support\Facades\Route;

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

