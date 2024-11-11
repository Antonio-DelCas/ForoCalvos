<?php

namespace App\Http\Controllers;

use App\Models\contenido;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class RespuestasController
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


        $contenido = new Respuesta;
        $contenido->contenido = $request->contenido;
        $contenido->hilos_id = $request->hilos_id;
        $contenido->users_id = Auth::id();
        $contenido->save();

        return redirect("/respuestas/" . $contenido->id);
    }
}
