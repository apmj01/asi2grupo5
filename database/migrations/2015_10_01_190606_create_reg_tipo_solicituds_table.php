<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegTipoSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_tipo_solicituds', function (Blueprint $table) {
            $table->primary('id_tipo_solicitud');
            $table->string('id_formato');
            $table->string('descripcion');
            $table->foreign('id_formato')->references('id_formato')->on('reg_solicitud_formato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reg_tipo_solicituds');
    }
}
