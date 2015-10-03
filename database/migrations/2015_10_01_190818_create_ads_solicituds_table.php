<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_solicituds', function (Blueprint $table) {
             varchar(5)not null,
 varchar(5) not null,
 varchar(5)not null,
 varchar(5)not null,
 date,
 time,
descripcion_solicitud varchar(450),
primary key(id_ads_solicitud),
constraint id_ads_resoluciones foreign key(id_ads_resoluciones) references  (id_ads_resoluciones),
constraint id_contribuyente_ads foreign key(id_contribuyente) references  (id_contribuyente),
constraint id_modulo_ads foreign key(id_modulo) references  (id_modulo)
            
            $table->string('id_ads_solicitud').primary();
            $table->string('id_ads_resoluciones');
            $table->string('id_contribuyente');
            $table->string('id_modulo');
            $table->date('fecha_solicitud');
            $table->time'hora_solicitud');
            $table->string('descripcion_solicitud');
            $table->string('descripcion_solicitud');
            $table->foreign('id_ads_resoluciones')->references('id_ads_resoluciones')->on('ads_resoluciones');
            $table->foreign('id_contribuyente')->references('id_contribuyente')->on('core_contribuyente');
            $table->foreign('id_modulo')->references('id_modulo')->on('core_modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ads_solicituds');
    }
}
