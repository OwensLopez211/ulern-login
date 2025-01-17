<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Asegúrate de importar Auth
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Muestra el formulario de registro.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register'); // Asegúrate de tener la vista en resources/views/auth/register.blade.php
    }

    /**
     * Maneja una solicitud de registro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
        public function store(Request $request)
    {
        // Validar los datos ingresados
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear el usuario
        $user = User::create([
            'nombre' => $validatedData['nombre'],
            'apellido' => $validatedData['apellido'],
            'telefono' => $validatedData['telefono'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Opcional: autenticar al usuario recién registrado
        Auth::login($user);

        // Retornar una respuesta JSON
        return response()->json([
            'message' => 'Usuario registrado correctamente',
            'user' => $user,
        ], 201); // Código 201 para creación exitosa
    }
}
