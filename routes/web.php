<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HilosController;
use App\Http\Controllers\RespuestasController;
use Illuminate\Support\Facades\Route;
use App\Models\Categoria;
use App\Models\Hilo;
use App\Models\Respuesta;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login', [AuthController::class]);
});
Route::post('/login-attempt', [AuthController::class, 'login'])->name('login-attempt');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/categorias', function () {
    return view('categorias', ["categorias" => Categoria::all()]);
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/crear-hilo', function () {
    return view('crearHilo', ["categorias" => Categoria::all()]);
});

Route::post('/crear-hilo-action', [HilosController::class, 'crear'])->name('crear-hilo-action');

// Route::post('/crear-respuesta-action', [RespuestasController::class, 'crear'])->name('crear-respuesta-action');

Route::get('/hilos/{categoriasId}', function (string $categoriasId) {
    return view('hilos', [
        "hilos" => Hilo::where('categoria_id', $categoriasId)->get(),
        "categoria" => Categoria::find($categoriasId)
    ]);
});

Route::get('/respuestas/{hiloId}', function (string $hiloId) {
    $hilo = Hilo::findOrFail($hiloId);
    $respuestas = Respuesta::with('user')->where('hilos_id', $hiloId)->get();

    return view('respuestas', [
        "hilo" => $hilo,
        "respuestas" => $respuestas
    ]);
});
