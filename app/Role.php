<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'role';
    protected $primaryKey = 'idRol';
    protected $fillable = [
        'nombre',
        'estado',
    ];
}
