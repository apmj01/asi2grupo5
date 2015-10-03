<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegSolicitudFormatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_solicitud_formatos', function (Blueprint $table) {
            $table->primary('id_formato');
            $table->string('columna1');
            $table->string('columna2');
            $table->string('columna3');
            $table->string('columna4');
            $table->string('columna5');
            $table->string('columna6');
            $table->string('columna7');
            $table->string('columna8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reg_solicitud_formatos');
    }
}
