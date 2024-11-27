<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    public function index(){
        $this->redirect();

        $cursos = Curso::with('user')->latest()->get();
        return view("components.admin.cursos",['cursos'=>$cursos]);
    }

    public function create(){
        $this->redirect();

        return view("components.admin.cursosform");

    }

    public function store(Request $request){
        $this->redirect();

        $request->validate([
            'name'=>'required',
            'carga'=>'required',
            'body'=>'required',
            'certificado'=>'required',
            'programa' =>'required',
            'img'=>'required'
        ]);

        return view("components.admin.cursosform");

    }

    public function redirect(){
        if(Auth::user()->role !== "admin"){
            return redirect("/");
        }
    }
}