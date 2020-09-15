<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //
    protected $table = 'peliculas';
    protected $primaryKey = 'idPelicula';
    protected $fillable = [
        'titulo',
        'tituloOriginal',
        'duracion',
        'anio',
        'fotoPortada',
        'sinopsis',
        'reparto',
        'urlTrailer',
        'urlCompartir',
    ];
}
