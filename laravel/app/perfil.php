<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    //
	protected $table = "perfil";
	protected $fillable = ['perfil'];
	
	public function cuentas(){
		return $this->hasMany('App\cuentas');
	}
}
