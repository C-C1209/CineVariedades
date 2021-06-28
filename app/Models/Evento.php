<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Evento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'Fecha',
        'Evento',
        'if_funcion'
    ];
}
