<?php

namespace App\Http\Controllers;

use App\Models\contenido;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class RespuestasController extends Controller
{
    public function crear(Request $request)
    {
        $request->validate([
            'hilos_id' => 'required',
            'contenido' => 'required'
        ]);


        $contenido = new Respuesta;
        $contenido->contenido = $request->contenido;
        $contenido->hilos_id = $request->hilos_id;
        $contenido->users_id = Auth::id();
        $contenido->save();

        return response()->json($contenido);
    }
}
