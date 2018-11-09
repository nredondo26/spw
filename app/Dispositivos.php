<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    protected $table = 'dispositivos';

     protected $fillable = [
        'id','id_dispositivos', 'nombre', 'id_usuario'
    ];
}
