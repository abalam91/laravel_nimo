<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    //
	protected $table = "usuarios";
	protected $fillable = ['idCuentas', 'nombre', 'apellidos', 'fechanacimiento', 'direccion'];
	
	public function cuentas(){
		return $this->belongsTo('App\cuentas', 'idCuentas');
	}
	
	public function catalogo_talleres(){
		return $this->belongsToMany('App\catalogo_talleres', 'catalogo_talleres_has_usuarios', 'idUsuarios', 'idCatalogoTalleres')->withTimestamps();
	}
}
