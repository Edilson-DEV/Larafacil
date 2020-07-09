<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('idPelicula');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->string('titulo');
            $table->string('tituloOriginal');
            $table->float('duracion');
            $table->dateTime('anio');
            $table->string('fotoPortada');
            $table->string('sinopsis');
            $table->string('reparto');
            $table->string('urlTrailer');
            $table->string('urlCompartir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
