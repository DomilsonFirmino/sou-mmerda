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
    return view("dashboard",['users'=>$user,'subs'=>$subs, 'cursos'=>$cursos]);
})->middleware('auth');