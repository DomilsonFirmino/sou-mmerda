<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    /** @use HasFactory<\Database\Factories\EventoFactory> */
    use HasFactory;
    protected $fillable = [
        'img',
        'title',
        'body',
        'data_de_inicio',
        'data_de_fim'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
