<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('titulo_servicio');
            $table->longText('url_imagen');
            $table->longText('descripcion_servicio')->nullable();
            $table->decimal('monto', 10, 2);
            $table->integer('role_user_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
        });
        Schema::table('servicios', function($table) {
              $table->foreign('role_user_id')->references('id')->on('role_user');
              $table->foreign('categoria_id')->references('id')->on('categorias');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
