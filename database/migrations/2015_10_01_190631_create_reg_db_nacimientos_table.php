<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegDbNacimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_db_nacimientos', function (Blueprint $table) {
            $table->primary('no_folio');
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->string('nombre_padre');
            $table->string('dui_padre');
            $table->string('nit_padre');
            $table->date('fecha_nacimiento_padre');
            $table->string('nombre_madre');
            $table->string('dui_madre');
            $table->string('nit_madre');
            $table->date('fecha_nacimiento_madre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reg_db_nacimientos');
    }
}
