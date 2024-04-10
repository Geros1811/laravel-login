<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    protected $table = 'cupones'; // Especificar el nombre de la tabla

    protected $fillable = [
        'codigo', 'porcentaje_descuento', 'fecha_caducidad'
    ];
}


