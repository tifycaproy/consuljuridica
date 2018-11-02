<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('titulo');
            $table->longText('resumen')->nullable();
            $table->longText('descripcion')->nullable();
            $table->boolean('publico');
            $table->bigInteger('posicion');
            $table->longText('url_multimedia')->nullable();;
            $table->longText('url_imagen')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
