<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitulos', function (Blueprint $table) {
            $table->increments('idCapitulo');

            $table->unsignedBigInteger('idTemporada');
            $table->foreign('idTemporada')->references('idTemporada')->on('temporadas');

            $table->string('tituloOriginal');
            $table->dateTime('fechaEstreno');
            $table->string('sinopsis');
            $table->string('urlCompartir');
            $table->boolean('estado');
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
        Schema::dropIfExists('capitulos');
    }
}
