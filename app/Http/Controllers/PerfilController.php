<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PerfilController extends Controller
{
    public function subirImagen(Request $request): RedirectResponse
    {
        $request->validate([
            'file' => 'required',
        ]);

        // Antes de guardar la imagen, borramos la actual SI NO ES LA POR DEFECTO

        $imagen_path = $request->file('file')->store('avatares', ['disk' => 'public']);

        $user = User::find(Auth::user()->id);
        $user->imagen = $imagen_path;
        $user->save();

        return redirect("/perfil");
    }
}
