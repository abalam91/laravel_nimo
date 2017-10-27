<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogoTalleresHasUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_talleres_has_usuarios', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('idCatalogoTalleres')->unsigned();
			$table->integer('idUsuarios')->unsigned();
            $table->timestamps();
			
			$table->foreign('idCatalogoTalleres')->references('id')->on('catalogo_talleres');
			$table->foreign('idUsuarios')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogo_talleres_has_usuarios');
    }
}
