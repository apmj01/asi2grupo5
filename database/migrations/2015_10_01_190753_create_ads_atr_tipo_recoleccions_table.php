<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsAtrTipoRecoleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_atr_tipo_recoleccions', function (Blueprint $table) {
            $table->string('id_ads_atr').primary();
            $table->string('id_cat_atr');
            $table->date('ads_fecha_inicio');
            $table->date('ads_fecha_fin');
            $table->foreign('id_cat_atr')->references('id_cat_atr')->on('ads_catalogo_atr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ads_atr_tipo_recoleccions');
    }
}
