<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    //
    protected $table = 'temporadas';
    protected $primaryKey = 'idTemporada';
    protected $fillable = [
        'nombre',
        ];
}
