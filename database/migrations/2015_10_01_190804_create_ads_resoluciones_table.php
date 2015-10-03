<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsResolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_resoluciones', function (Blueprint $table) {            
            $table->string('id_ads_resoluciones').primary();
            $table->string('ads_resolcuion_solicitud');
            $table->string('id_ads_atr');
            $table->string('id_ads_acr');
            $table->foreign('id_ads_atr')->references('id_ads_atr')->on('ads_atr_tipo_recoleccion');
            $table->foreign('id_ads_acr')->references('id_ads_acr')->on('ads_acr_recollecion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ads_resoluciones');
    }
}
