<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'subscription_id',
        'status',
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo DatosCurso
    public function course()
    {
        return $this->belongsTo(DatosCurso::class, 'course_id');
    }
}
