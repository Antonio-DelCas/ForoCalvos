<?php

use Illuminate\Support\Facades\Route;
use App\Models\Categoria;

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

Route::get('/hilos', function () {
    return view('hilos');
});
