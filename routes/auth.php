<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


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

Route::get('/resetar', function () {
    return view('components.profile.reset');
})->middleware('guest');

Route::post('/resetar', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
    ? back()->with(['status' => __($status)])
    : back()->withErrors(['email' => __($status)]);
})->middleware('guest');

Route::get('/reset/{token}', function (string $token) {
    return view('components.profile.resetpass', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/resetpassword', function(Request $request){

    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);

})->middleware('guest')->name('password.update');
