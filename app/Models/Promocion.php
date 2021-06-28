<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre',
        'Descripcion'
    ];
}
