<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('idCuentas')->unsigned();
			$table->string('nombre', 100);
			$table->string('apellidos', 100);
			$table->date('fechanacimiento');
			$table->string('direccion', 150);
            $table->timestamps();
			
			$table->foreign('idCuentas')->references('id')->on('cuentas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
