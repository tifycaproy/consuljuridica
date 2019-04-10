<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->integer('id_solicitud');
            $table->integer('id_solicitante');
            $table->integer('id_servicio');
            $table->integer('id_seccion');
            $table->integer('id_campo');
            $table->longText('valor');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::table('solicitud', function($table) {
            $table->foreign('id_campo')->references('id')->on('campos');
            $table->foreign('id_solicitante')->references('id')->on('solicitantes');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->foreign('id_seccion')->references('id')->on('secciones');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud');
    }
}
