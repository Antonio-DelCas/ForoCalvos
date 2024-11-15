<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    /**
     * Función que se encarga de recibir los datos del formulario de login, comprobar que el usuario existe y
     * en caso correcto logar al usuario
     */
    public function login(Request $request): RedirectResponse
    {
        Log::debug('This is a debug message.');

        // Comprobamos que el email y la contraseña han sido introducidos
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Almacenamos las credenciales de email y contraseña
        $credentials = $request->only('email', 'password');

        // Si el usuario existe lo logamos y lo llevamos a la vista de "logados" con un mensaje
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
        return redirect("/login")->with('error', 'Los datos introducidos no estan registrados');
    }

    public function registro(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $cuenta = new User;
        $cuenta->name = $request->name;
        $cuenta->email = $request->email;
        $cuenta->password = $request->password;
        $cuenta->save();

        Auth::attempt(["email" => $request->email, "password" => $request->password]);

        return redirect("/");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
