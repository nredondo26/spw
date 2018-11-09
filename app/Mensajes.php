<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
   protected $table = 'mensajes';

     protected $fillable = [
        'id','fecha', 'hora', 'texto','tipo','estado','id_chat','tipo_mensaje' ];
}

