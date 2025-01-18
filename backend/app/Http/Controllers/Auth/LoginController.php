<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Método para iniciar sesión
    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $request->validate([
            'email' => 'required|email', // El email es obligatorio y debe ser válido
            'password' => 'required|string|min:8', // La contraseña debe tener al menos 8 caracteres
        ], [
            // Mensajes personalizados para errores
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'Por favor, ingrese un correo válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user(); // Usuario autenticado
            $token = $user->createToken('auth_token')->plainTextToken; // Crear token de acceso

            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'user' => $user,
                'token' => $token,
            ], 200); // Respuesta con estado 200 OK
        }

        // Respuesta para credenciales inválidas
        return response()->json([
            'message' => 'Credenciales inválidas. Por favor, verifique sus datos.',
        ], 401);
    }

    // Método para cerrar sesión
    public function logout(Request $request)
    {
        // Revocar el token actual del usuario
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Cierre de sesión exitoso',
        ], 200);
    }
}
