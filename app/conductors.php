<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class conductors extends Authenticatable
{
   	protected $guarded = [];

		
	 protected $fillable = [
        'email','password',
    ];

}
