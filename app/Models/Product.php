<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'categoria_id', 'cantidad', 'precio', 'imagen'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
