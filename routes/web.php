<?php

use Illuminate\Support\Facades\Route;

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/hilos', function () {
    return view('hilos');
});
