<?php

use App\Http\Controllers\MessagueController;
use App\Models\Evento;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

require __DIR__."/servicos.php";
require __DIR__."/solucoes.php";

Route::get('/contatos', function () {
    return view('contatos');
});

Route::post('/message', [MessagueController::class,'store']);

Route::get('/eventos', function () {
    $eventos = Evento::query()->latest()->take(3)->get();
    return view('components.eventos.index',['eventos'=>$eventos]);
});

Route::get('/eventos/all', function () {
    $eventos = Evento::query()->latest()->get();
    return view('components.eventos.eventos',['eventos'=>$eventos]);
});

Route::get('/eventos/{evento}', function (Evento $evento) {
    return view('components.eventos.evento',['evento'=>$evento]);
});

require __DIR__."/subscription.php";

require __DIR__."/auth.php";

require __DIR__."/admin.php";
