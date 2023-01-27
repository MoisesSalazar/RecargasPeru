<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginSubmit(request $request)
    {
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();

            switch (Auth::user()->type_user) {
                case "ADMINISTRADOR":
                    return redirect()->route('administrador');
                    break;
                case "CLIENTE":
                    return redirect()->route('cliente');
                    break;
                default:
                    dd(Auth::user()->type_user);
                    return redirect()->route('welcome');
            }
        }
        if (User::where('email', $request->email)->first() != null) {
            throw ValidationException::withMessages([
                'password' => 'Contraseña incorrecta.'
            ]);
        } else {
            throw ValidationException::withMessages([
                'email' => 'Correo invalido.',
            ]);
        }
    }

    public function logout(request $request, Redirector $redirect)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return $redirect->to('login');
    }
}
