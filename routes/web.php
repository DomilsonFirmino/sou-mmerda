<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

require __DIR__."/servicos.php";
require __DIR__."/solucoes.php";
require __DIR__."/eventos.php";

Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/eventos', function () {
    return view('eventos');
});

require __DIR__."/subscription.php";

require __DIR__."/auth.php";

require __DIR__."/admin.php";

require __DIR__."/profile.php";