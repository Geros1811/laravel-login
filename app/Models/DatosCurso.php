<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosCurso extends Model
{
    use HasFactory;

    protected $table = 'courses'; // Especifica el nombre de la tabla si es diferente al nombre del modelo
    protected $primaryKey = 'id'; // Especifica la clave primaria si es diferente a 'id'

    // Aquí puedes definir otras propiedades y métodos según tus necesidades
}
