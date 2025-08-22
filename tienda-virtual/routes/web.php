<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/sesion', function () {
    return view('auth.sesion');
})->name('login');

Route::get('/contenido/inicio', function () {
    return view('contenido.inicio');
})->name('inicio');

Route::get('/contenido/pedidos', function () {
    return view('contenido.pedidos');
})->name('pedido');

Route::get('/contenido/perfil', function () {
    return view('contenido.perfil');
})->name('perfil');

Route::get('/contenido/tienda', function () {
    return view('contenido.tienda');
})->name('tienda');

