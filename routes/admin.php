<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\SubscriberController;
use App\Models\Curso;
use App\Models\Messague;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/dashboard", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }
    $user = User::where('role','user')->latest()->get();
    $subs = Subscriber::all();
    $cursos = Curso::with('user')->get();
    return view("components.admin.home",['users'=>$user,'subs'=>$subs, 'cursos'=>$cursos,'eventos'=>$cursos]);
})->middleware('auth');

Route::get("/dashboard/users", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }

    $user = User::where('role','user')->latest()->get();
    return view("components.admin.users",['users'=>$user]);
})->middleware('auth');


Route::get("/dashboard/subscrivers", [SubscriberController::class,'index'])->middleware('auth');
Route::delete("/dashboard/subscrivers/{subscriber}", [Subscriber::class,'destroy'])->middleware('auth');


Route::get("/dashboard/messages", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }

    $messages = Messague::query()->latest()->get();
    return view("components.admin.messages",['messages'=>$messages]);

})->middleware('auth');

Route::get("/dashboard/cursos",[CursoController::class,'index'])->middleware('auth');
Route::get("/dashboard/cursos/create",[CursoController::class,'create'])->middleware('auth');
Route::post("/dashboard/cursos",[CursoController::class,'store'])->middleware('auth');
Route::get("/dashboard/cursos/{curso}",[CursoController::class,'show'])->middleware('auth');
Route::get("/dashboard/cursos/{curso}/edit",[CursoController::class,'edit'])->middleware('auth');
Route::get("/dashboard/cursos/{curso}/download",[CursoController::class,'download'])->middleware('auth');
Route::patch("/dashboard/cursos/{curso}",[CursoController::class,'update'])->middleware('auth');
Route::delete("/dashboard/cursos/{curso}",[CursoController::class,'destroy'])->middleware('auth');

Route::get("/dashboard/eventos",[EventoController::class,'index'])->middleware('auth');
Route::get("/dashboard/eventos/create",[EventoController::class,'create'])->middleware('auth');
Route::post("/dashboard/eventos",[EventoController::class,'store'])->middleware('auth');
Route::get("/dashboard/eventos/{evento}",[EventoController::class,'show'])->middleware('auth');
Route::get("/dashboard/eventos/{evento}/edit",[EventoController::class,'edit'])->middleware('auth');
Route::patch("/dashboard/eventos/{evento}",[EventoController::class,'update'])->middleware('auth');
Route::delete("/dashboard/eventos/{evento}",[EventoController::class,'destroy'])->middleware('auth');
