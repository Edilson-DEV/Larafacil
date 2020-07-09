<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero_peliculas', function (Blueprint $table) {
            $table->increments('idGeneroPelicula');
            $table->unsignedBigInteger('idGenero');
            $table->foreign('idGenero')->references('idGenero')->on('generos');

            $table->unsignedBigInteger('idPelicula');
            $table->foreign('idPelicula')->references('idPelicula')->on('peliculas');

            $table->unsignedBigInteger('idSerie');
            $table->foreign('idSerie')->references('idSerie')->on('series');

            $table->dateTime('fechaEstreno')->nullable();
            $table->dateTime('esEstreno')->nullable();
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
        Schema::dropIfExists('genero_peliculas');
    }
}
