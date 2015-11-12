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
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('usuario')->unique();
            $table->string('clave', 15);
            $table->string('email')->unique();
            $table->string('estado');
            $table->integer('core_role_id')->unsigned();
            $table->foreign('core_role_id')->references('id')->on('core_roles');
            $table->timestamps();
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
