<?php

use App\Models\Curso;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/dashboard", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }
    $user = User::where('role','user')->get();
    $subs = Subscriber::all();
    $cursos = Curso::with('user')->get();
    return view("components.admin.home",['users'=>$user,'subs'=>$subs, 'cursos'=>$cursos]);
})->middleware('auth');

Route::get("/dashboard/users", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }

    $user = User::where('role','user')->get();
    return view("components.admin.users",['users'=>$user]);
})->middleware('auth');


Route::get("/dashboard/subscrivers", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }

    $subs = Subscriber::query()->latest()->get();
    return view("components.admin.subscrivers",['subs'=>$subs]);
})->middleware('auth');


Route::get("/dashboard/cursos", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }

    $cursos = Curso::with('user')->latest()->get();
    return view("components.admin.cursos",['cursos'=>$cursos]);
})->middleware('auth');

Route::get("/dashboard/eventos", function(){
    if(Auth::user()->role !== "admin"){
        return redirect("/");
    }

    $cursos = Curso::with('user')->get();
    return view("components.admin.eventos",['cursos'=>$cursos]);
})->middleware('auth');
