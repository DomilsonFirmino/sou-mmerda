<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registerStore(Request $request)
    {
        $credentials = $request->validate([
            'name' =>'required|max:30',
            'email'=>'required|email|max:40',
            'password'=>"required|max:40|confirmed",
            'password_confirmation'=>'required|max:40',
        ]);

        $user = User::create($credentials);

        Auth::login($user);

        return redirect()->back()->with('message',['Conta criada com sucesso']);

    }

    public function loginStore(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email|max:40',
            'password'=>"required|max:40",
        ]);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            if(Auth::user()->role == "admin"){
                return redirect("/dashboard");
            }

            return redirect()->back();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function destroy(Request $request    )
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
}
