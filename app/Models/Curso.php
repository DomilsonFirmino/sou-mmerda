<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    /** @use HasFactory<\Database\Factories\CursoFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'carga',
        'body',
        'certificado',
        'img',
        'programa'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
