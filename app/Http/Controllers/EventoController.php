<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->redirect();
        $eventos = Evento::latest()->get();
        return view("components.admin.eventos",['eventos'=>$eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("components.admin.eventosform");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->redirect();

        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'data_de_inicio'=>'required|before:data_de_fim|after_or_equal: today',
            'data_de_fim'=>'required|after:data_de_inicio|after_or_equal: today',
            'img'=>['required' , 'mimes:jpeg,bmp,png', 'max:3024']
        ]);

        $pathIMG = $request->img->store('eventos');

        $user = User::find(Auth::user()->id);

        $user->eventos()->create([
            'title'=>$request->title,
            'body'=>$request->body,
            'data_de_inicio'=>$request->data_de_inicio,
            'data_de_fim' => $request->data_de_fim,
            'img'=> $pathIMG
        ]);

        return redirect("/dashboard/eventos");
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        $this->redirect();
        return view("components.admin.evento",['evento'=>$evento]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        $this->redirect();
        return view("components.admin.eventosedit",['evento'=>$evento]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        $this->redirect();

        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'data_de_inicio'=>'required|before:data_de_fim|after_or_equal: today',
            'data_de_fim'=>'required|after:data_de_inicio|after_or_equal: today',
            'img'=>['required' , 'mimes:jpeg,bmp,png', 'max:3024']
        ]);

        $pathIMG = $request->img->store('eventos');

        $user = User::find(Auth::user()->id);

        $img = public_path("storage\\$evento->img");
        File::delete($img);

        $user->eventos()->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'data_de_inicio'=>$request->data_de_inicio,
            'data_de_fim' => $request->data_de_fim,
            'img'=> $pathIMG
        ]);

        return redirect("/dashboard/eventos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        $this->redirect();

        $img = public_path("storage\\$evento->img");

        File::delete($img);

        $evento->delete();
        return redirect("/dashboard/eventos");
    }

    public function redirect(){
        if(Auth::user()->role !== "admin"){
            return redirect("/");
        }
    }
}
