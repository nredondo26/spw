<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Contactos extends Authenticatable
{

	use Notifiable;
	
	protected $table = 'contactos';

     protected $fillable = ['id','nombre', 'id_dispositivos', 'numero'];
}
