<?php

namespace App\Http\Controllers;

use App\Models\Hilo;
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


        $hilo = new Hilo;
        $hilo->titulo = $request->titulo;
        $hilo->categoria_id = $request->categoria;
        $hilo->users_id = Auth::id();
        $hilo->save();

        return redirect("/respuestas/" . $hilo->id);
    }
}
