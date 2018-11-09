<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable
{

	use Notifiable;
	
	protected $table = 'usuarios';

     protected $fillable = [
        'id','nombre', 'email', 'password','codigo'
    ];
}
