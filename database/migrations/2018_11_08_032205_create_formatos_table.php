<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formatos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('posicion_seccion');
            $table->integer('seccion_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
            $table->integer('role_user_id')->unsigned();
        });
        Schema::table('formatos', function($table) {
              $table->foreign('role_user_id')->references('id')->on('role_user');
              $table->foreign('seccion_id')->references('id')->on('secciones');
              $table->foreign('servicio_id')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formatos');
    }
}
