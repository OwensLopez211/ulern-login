<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Página de inicio
Route::get('/', function () {
    return view('welcome'); // Cambia a la vista que desees para tu página principal
});

// Rutas solo para formularios web

// Rutas de ejemplo para autenticación adicional
Route::get('/home', function () {
    return view('home'); // Asegúrate de que exista la vista home.blade.php en resources/views
})->name('home');


// Puedes agregar otras rutas aquí según sea necesario...
