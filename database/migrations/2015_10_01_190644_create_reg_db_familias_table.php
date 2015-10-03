<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegDbFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_db_familias', function (Blueprint $table) {
            $table->primary('no_folio');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->string('dui');
            $table->string('nit');
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('estatus');
            $table->string('nombres_conyuge');
            $table->string('apellidos_conyuge');
            $table->string('dui_conyuge');
            $table->string('nit_conyuge');
            $table->date('fecha_nacimiento_conyuge');
            $table->string('direccion_conyuge');
            $table->string('fallecido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reg_db_familias');
    }
}
