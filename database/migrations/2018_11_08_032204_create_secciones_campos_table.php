<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones_campos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('posicion_campo');
            $table->timestamps();
            $table->integer('role_user_id')->unsigned();
            $table->integer('seccion_id')->unsigned();
            $table->integer('campo_id')->unsigned();
        });
        Schema::table('secciones_campos', function($table) {
              $table->foreign('role_user_id')->references('id')->on('role_user');
              $table->foreign('seccion_id')->references('id')->on('secciones');
              $table->foreign('campo_id')->references('id')->on('campos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secciones_campos');
    }
}
