<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoreTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_transacciones', function (Blueprint $table) {
            $table->primary('id_transaccion');
            $table->string('id_solicitud');
            $table->string('id_modulo');
            $table->string('id_contribuyente');
            $table->string('id_usuario');
            $table->string('estatus');
            $table->foreign('id_usuario')->references('id_usuario')->on('core_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('core_transacciones');
    }
}
