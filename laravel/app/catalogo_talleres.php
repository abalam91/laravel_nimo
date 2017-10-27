<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalogo_talleres extends Model
{
    //
	protected $table = "catalogo_talleres";
	protected $fillable = ['descripcion'];
	
	public function usuarios(){
		return $this->belongsToMany('App\usuarios', 'catalogo_talleres_has_usuarios', 'idCatalogoTalleres', 'idUsuarios')->withTimestamps();
	}
}
