<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsCatalogoAtrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_catalogo_atrs', function (Blueprint $table) {
            $table->string('id_cat_atr').primary();
            $table->string('ads_tipo_recoleccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ads_catalogo_atrs');
    }
}
