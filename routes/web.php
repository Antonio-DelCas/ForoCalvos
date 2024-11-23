<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HilosController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RespuestasController;
use Illuminate\Support\Facades\Route;
use App\Models\Categoria;
use App\Models\Hilo;
use App\Models\Respuesta;
use App\Models\User;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
});
Route::post('/login-action', [AuthController::class, 'login'])->name('login-action');
Route::post('/registro-action', [AuthController::class, 'registro'])->name('registro-action');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth');

Route::get('/perfil-usuario/{id}', function (string $id) {
    return view('perfilUsuario', ["usuario" => User::findOrFail($id)]);
});

Route::get('/categorias', function () {
    return view('categorias', ["categorias" => Categoria::all()]);
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/crear-hilo', function () {
    return view('crearHilo', ["categorias" => Categoria::all()]);
})->middleware('auth');

Route::post('/crear-hilo-action', [HilosController::class, 'crear'])->name('crear-hilo-action')->middleware('auth');

Route::post('/crear-respuesta-action', [RespuestasController::class, 'crear'])->name('crear-respuesta-action')->middleware('auth');

Route::get('/hilos/{categoriasId}', function (string $categoriasId) {
    return view('hilos', [
        "hilos" => Hilo::where('categoria_id', $categoriasId)->get(),
        "categoria" => Categoria::find($categoriasId)
    ]);
});

Route::delete('/respuestas/eliminar', [RespuestasController::class, 'eliminarComentario'])->name('respuestas.eliminar')->middleware('auth');

Route::get('/respuestas/{hiloId}', function (string $hiloId) {
    $hilo = Hilo::findOrFail($hiloId);
    $respuestas = Respuesta::with('user')->where('hilos_id', $hiloId)->get();

    return view('respuestas', [
        "hilo" => $hilo,
        "respuestas" => $respuestas
    ]);
});

Route::post('/subir-imagen-action', [PerfilController::class, 'subirImagen'])->name('subir-imagen-action')->middleware('auth');

Route::post('/editar-biografia-action', [PerfilController::class, 'editarBiografia'])->name('editar-biografia-action')->middleware('auth');
