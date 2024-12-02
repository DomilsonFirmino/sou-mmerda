<?php

namespace App\Http\Controllers;

use App\Models\Messague;
use Illuminate\Http\Request;

class MessagueController extends Controller
{
    //
    public function store(Request $request){
        $attr = $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'message'=>'required'
        ]);

        Messague::create($attr);

        return redirect("/contatos");
    }
}
