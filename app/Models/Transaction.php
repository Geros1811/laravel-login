<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Transaction extends Model
{
    protected $fillable = [
        'course_id',
        'transaction_id',
        'status',
        'user_id',
    ];

    public function course()
    {
        return $this->belongsTo(DatosCurso::class, 'course_id');
    }
}