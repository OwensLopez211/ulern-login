<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'profile_picture' => 'nullable|url',
            'experiencia' => 'nullable|string',
            'acerca_de_mi' => 'nullable|string',
            'ubicacion' => 'nullable|string',
        ]);

        $user->update($validated);

        return response()->json([
            'message' => 'Perfil actualizado exitosamente.',
            'user' => $user,
        ]);
    }
}
