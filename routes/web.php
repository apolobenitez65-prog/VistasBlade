<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/productos', function () {
    $productos = [
         [
            'nombre' => 'Cafe molido',
            'precio' => 5500,
            'stock' => 20,
        ],
        [
            'nombre' => 'Yerba mate',
            'precio' => 2500,
            'stock' => 15,
        ],
        [
            'nombre' => 'Te verde',
            'precio' => 1800,
            'stock' => 8,
        ],
        [
            'nombre' => 'Miel pura',
            'precio' => 3200,
            'stock' => 0,
        ],
    ];
    return view('productos', [
        'productos' => $productos,
    ]);
});
Route::get('/contacto', function () {
    $email = 'contacto@miempresa.com';
    return view('contacto', [
        'email' => $email,
    ]);
});

