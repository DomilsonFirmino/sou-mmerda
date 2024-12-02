<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get("/register", [AuthController::class,'register'])->middleware('guest');
Route::post("/register", [AuthController::class,'registerStore'])->middleware('guest');

Route::get("/login",[AuthController::class,'login'])->middleware('guest')->name("login");
Route::post("/login",[AuthController::class,'loginStore'])->middleware('guest');

Route::post("/logout", [AuthController::class,'destroy'])->middleware('auth');

Route::get("/profile", function(){
    return view("components.profile.index");
})->middleware("auth");

Route::patch("/profile/{user}", function(Request $request){
    $request->validate([
        'current_password' => 'required|current_password',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
    ]);

    $request->user()->update([
        'password' => Hash::make($request->password)
    ]);

    return redirect()->back()->with('status', 'Palavra passe atualizada com sucesso');

})->middleware("auth");

Route::delete("/profile/{user}", function(Request $request){
    $request->validateWithBag('userDeletion', [
        'password' => ['required', 'current_password'],
    ]);

    $user = $request->user();

    Auth::logout();

    $user->delete();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return  redirect('/')->with('status', 'Conta deletada com sucesso');
})->middleware("auth");

