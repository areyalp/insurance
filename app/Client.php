<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
	protected $table = "clients";

	protected $fillable = ['first_name', 'last_name', 'cedula_rif', 'password'];

	protected $hidden = ['password', 'remember_token'];
}
