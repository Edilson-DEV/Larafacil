<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //
    protected $table = 'series';
    
    protected $primaryKey = 'idSerie';
    protected $fillable = [
        'titulo',
        'tituloOriginal',
        'anio',
        'fotoPortada',
        ];
}
