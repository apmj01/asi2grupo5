<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_pagos', function (Blueprint $table) {
            $table->primary('id_pago');
            $table->string('id_transaccion');
            $table->string('id_tipo_pago');
            $table->string('id_forma_pago');
            $table->string('no_factura');
            $table->date('fecha');
            $table->float('monto');
            $table->foreign('id_transaccion')->references('id_transaccion')->on('core_transacciones');
            $table->foreign('id_tipo_pago')->references('id_tipo_pago')->on('core_tipo_pago');
            $table->foreign('id_forma_pago')->references('id_forma_pago')->on('core_forma_pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('core_pagos');
    }
}
