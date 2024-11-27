<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            'programa' =>['required' , 'mimes:pdf', 'max:3024'],
            'img'=>['required' , 'mimes:jpeg,bmp,png', 'max:3024']
        ]);

        $pathLogo = $request->img->store('cursos/imagens');
        $pathPrograma = $request->programa->store('cursos/pdf');

        $user = User::find(Auth::user()->id);

        $user->cursos()->create([
            'name'=>$request->name,
            'carga'=>$request->carga,
            'body'=>$request->body,
            'certificado'=>$request->certificado,
            'programa' => $pathPrograma,
            'img'=> $pathLogo
        ]);

        return redirect("/dashboard/cursos");

    }

    public function show(Curso $curso){
        $this->redirect();
        return view("components.admin.curso",['curso'=>$curso]);
    }

    public function edit(Curso $curso){
        return view("components.admin.cursosedit",['curso'=>$curso]);
    }

    public function update(Request $request, Curso $curso){
        $this->redirect();

        $request->validate([
            'name'=>'required',
            'carga'=>'required',
            'body'=>'required',
            'certificado'=>'required',
            'programa' =>['required' , 'mimes:pdf', 'max:3024'],
            'img'=>['required' , 'mimes:jpeg,bmp,png', 'max:3024']
        ]);

        $pathLogo = $request->img->store('cursos/imagens');
        $pathPrograma = $request->programa->store('cursos/pdf');

        $user = User::find(Auth::user()->id);

        $pdf = public_path("storage\\$curso->programa");
        $img = public_path("storage\\$curso->img");
    
        File::delete($pdf);
        File::delete($img);

        $user->cursos()->update([
            'name'=>$request->name,
            'carga'=>$request->carga,
            'body'=>$request->body,
            'certificado'=>$request->certificado,
            'programa' => $pathPrograma,
            'img'=> $pathLogo
        ]);

        return redirect("/dashboard/cursos");

    }

    public function download(Curso $curso){
        $this->redirect();

        $filePath = public_path("storage\\$curso->programa");

        return response()->download($filePath);
    }

    public function destroy($id){
        $this->redirect();

        $curso = Curso::findOrFail($id);

        $pdf = public_path("storage\\$curso->programa");
        $img = public_path("storage\\$curso->img");
    
        File::delete($pdf);
        File::delete($img);

        $curso->delete();
        return redirect("/dashboard/cursos");
    }

    public function redirect(){
        if(Auth::user()->role !== "admin"){
            return redirect("/");
        }
    }
}
