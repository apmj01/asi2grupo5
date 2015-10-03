<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoreContribuyentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_contribuyentes', function (Blueprint $table) {
            $table->primary('id_contribuyente');
            $table->string('nombre_contribuyente');
            $table->string('dui_contribuyete');
            $table->string('direccion_contribuyete');
            $table->string('correo_contribuyete');
            $table->string('telefono_contribuyete');
            $table->string('nombre_contribuyente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('core_contribuyentes');
    }
}
