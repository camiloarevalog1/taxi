<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class operador extends Authenticatable
{
  	protected $guarded = [];
  	  protected $fillable = [
        'email','password',
    ];

	public $timestamps = false;
}
