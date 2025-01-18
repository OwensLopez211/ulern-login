<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Asegúrate de importar el modelo User

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Validar los datos entrantes
        $validated = $request->validate([
            'profile_picture' => 'nullable|url',
            'experiencia' => 'nullable|string',
            'acerca_de_mi' => 'nullable|string',
            'ubicacion' => 'nullable|string',
        ]);

        // Verificar si el usuario es una instancia del modelo User
        if (!$user instanceof User) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Actualizar los datos del perfil
        $user->update($validated); // Si 'User' extiende de Eloquent, este método debería funcionar

        return response()->json([
            'message' => 'Perfil actualizado exitosamente.',
            'user' => $user,
        ]);
    }
}
