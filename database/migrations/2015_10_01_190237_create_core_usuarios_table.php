<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoreUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_usuarios', function (Blueprint $table) {
            $table->primary('id_usuario');
            $table->string('clave_acceso');
            $table->string('nombre');
            $table->string('dui');
            $table->string('nit');
            $table->string('estatus');
            $table->string('id_rol');
            $table->foreign('id_rol')->references('id_rol')->on('core_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('core_usuarios');
    }
}
