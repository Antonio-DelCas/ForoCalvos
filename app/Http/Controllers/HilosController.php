<?php

namespace App\Http\Controllers;

use App\Models\Hilo;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HilosController extends Controller
{
    public function crear(Request $request): RedirectResponse
    {
        Log::debug('This is a debug message.');

        // Comprobamos que la categoria, titulo y el contenido sean correctos
        $request->validate([
            'categoria' => 'required',
            'titulo' => 'required',
            'contenido' => 'required'
        ]);

        //Crear el hilo
        $hilo = new Hilo;
        $hilo->titulo = $request->titulo;
        $hilo->categoria_id = $request->categoria;
        $hilo->users_id = Auth::id();
        $hilo->save();

        //Crear la primera respuesta asociada al titulo del hilo creado
        $respuesta = new Respuesta;
        $respuesta->contenido = $request->contenido;
        $respuesta->hilos_id = $hilo->id;
        $respuesta->users_id = Auth::id();
        $respuesta->save();

        return redirect("/respuestas/" . $hilo->id);
    }
}
