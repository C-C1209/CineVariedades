<?php
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre',
        'Idioma',
        'Subtitulos',
        'Director',
        'Fecha',
        'Descripcion'
    ];
}
