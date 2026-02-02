<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{

    protected $table = 'provedor';

    protected $fillable = [
        'nombre',
        'documento',
        'direccion',
        'telefono',
        'correo',
        'estado',
    ];
}
