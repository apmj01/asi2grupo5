<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsAcrRecollecionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_acr_recollecions', function (Blueprint $table) {
            $table->primary('id_ads_acr');
            $table->string('ads_camion');
            $table->string('ads_serie_camion');
            $table->string('ads_placa');
            $table->string('ads_kilometraje');
            $table->string('id_ads_area');
            $table->float('monto');
            $table->foreign('id_ads_area')->references('id_ads_area')->on('ads_area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ads_acr_recollecions');
    }
}
