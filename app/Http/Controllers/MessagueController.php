<?php

namespace App\Http\Controllers;

use App\Models\Messague;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagueController extends Controller
{
    //

    public function index(){
        $this->redirect();

        $messages = Messague::query()->latest()->get();
        return view("components.admin.messages",['messages'=>$messages]);
    }

    public function store(Request $request){
        $attr = $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'message'=>'required'
        ]);

        Messague::create($attr);

        return redirect("/contatos");
    }

    public function show(Messague $messague){
        return view("components.admin.message",['messague'=>$messague]);
        dd($messague->attributes());
    }

    public function destroy(Messague $messague){
        $messague->delete();

        return redirect("/dashboard/messages");
    }
    public function redirect(){
        if(Auth::user()->role !== "admin"){
            return redirect("/");
        }
    }

}
