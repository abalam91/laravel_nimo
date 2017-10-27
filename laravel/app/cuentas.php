<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuentas extends Model
{
    //
	protected $table = "cuentas";
	protected $fillable = ['idPerfil', 'nombreusuario', 'contrasena', 'fecharegistro', 'activo', 'cadenaactivacion'];
	
	public function perfil(){
		return $this->belongsTo('App\perfil', 'idPerfil');
	}
	
	public function usuarios(){
		return $this->hasMany('App\usuarios');
	}
}
