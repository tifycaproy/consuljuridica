<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->integer('id_solicitante');
            $table->integer('id_campo');
            $table->longText('valor');
            $table->timestamps();
        });
        Schema::table('solicitantes', function($table) {
            $table->foreign('id_campo')->references('id')->on('campos');
            
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitantes');
    }
}
