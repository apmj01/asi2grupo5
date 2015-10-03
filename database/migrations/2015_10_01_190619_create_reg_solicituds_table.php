<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_solicituds', function (Blueprint $table) {
            $table->primary('id_solicitud');
            $table->string('id_modulo');
            $table->string('id_contribuyente');
            $table->string('id_tipo_solicitud');
            $table->date('fecha_solicitud');
            $table->string('documento');
            $table->string('no_folio');
            $table->foreign('id_modulo')->references('id_modulo')->on('core_modulos');
            $table->foreign('id_contribuyente')->references('id_contribuyente')->on('core_contribuyente');
            $table->foreign('id_tipo_solicitud')->references('id_tipo_solicitud')->on('reg_tipo_solicitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reg_solicituds');
    }
}
