<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cuentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('idPerfil')->unsigned();
			$table->string('nombreusuario', 100);
			$table->string('contrasena', 100);
			$table->date('fecharegistro');
			$table->boolean('activo');
			$table->string('cadenaactivacion', 200);
            $table->timestamps();
			
			$table->foreign('idPerfil')->references('id')->on('perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}
