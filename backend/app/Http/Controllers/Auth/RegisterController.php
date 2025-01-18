<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log; // Importación correcta de Log

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validación de datos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'telefono' => 'required|string|max:20',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Crear usuario
            $user = User::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'telefono' => $request->telefono,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'message' => 'Usuario registrado con éxito',
                'user' => $user,
            ], 201);
        } catch (\Exception $e) {
            // Registro del error en los logs
            Log::error($e->getMessage());

            // Respuesta de error
            return response()->json([
                'message' => 'Ocurrió un error en el registro',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
