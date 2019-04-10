<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->mediumText('nombre_campo');
            $table->integer('tipo_campo_id')->unsigned();
            $table->integer('role_user_id')->unsigned();
        });
        Schema::table('campos', function($table) {
              $table->foreign('role_user_id')->references('id')->on('role_user');
              $table->foreign('tipo_campo_id')->references('id')->on('tipos_campos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campos');
    }
}
