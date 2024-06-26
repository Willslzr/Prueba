<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen_referencia',
        'nombre_ubicacion',
        'oferta',
        'porcentage_oferta',
        'cantidad_stock'
    ];

}
