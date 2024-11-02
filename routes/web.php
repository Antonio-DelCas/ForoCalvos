<?php

use Illuminate\Support\Facades\Route;
use App\Models\Categoria;
use App\Models\Hilo;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/categorias', function () {
    return view('categorias', ["categorias" => Categoria::all()]);
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/hilos/{id}', function (string $id) {
    return view('hilos', ["hilos" => Hilo::where('categoria_id',$id)->get(), 
                          "categoria" => Categoria::find($id)]);
});
