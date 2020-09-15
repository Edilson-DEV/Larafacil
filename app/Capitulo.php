<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    //
    protected $table = 'capitulos';
    protected $primaryKey = 'idCapitulo';
    protected $fillable = [
        'tituloOriginal',
        'fechaEstreno',
        'sinopsis',
        'urlCompartir',
        'estado'
    ];
}
