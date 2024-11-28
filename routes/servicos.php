<?php

use App\Http\Controllers\CursoController;
use App\Models\Curso;
use Illuminate\Support\Facades\Route;

Route::get('/servicos', function () {
    return view('components.servicos.index');
});

Route::get('/servicos/apoioagestao', function () {
    return view('components.servicos.gestao');
});

Route::get('/servicos/formacao', function () {
    $cursos = Curso::all();
    return view('components.servicos.formacoes',['cursos'=>$cursos]);
});

Route::get('/servicos/formacao/curso/{curso}', function (Curso $curso) {
    return view("components.servicos.curso",['curso'=>$curso]);
});

Route::get('/servicos/formacao/curso/{curso}/download', [CursoController::class,'download'])->middleware('auth');

Route::get('/servicos/inovacao', function () {
    return view('components.servicos.inovacao');
});

Route::get('/servicos/procurement', function () {
    return view('components.servicos.procurement');
});

