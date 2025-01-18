<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
        'password',
        'experiencia',
        'acerca_de_mi',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
