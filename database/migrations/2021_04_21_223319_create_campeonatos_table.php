<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampeonatosTable extends Migration
{

    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('campeonatos', function (Blueprint $table) {
            $table->increments('campeonatos_id');
            $table->unsignedInteger('series_id');
            $table->string('name');
            $table->string('description');
            $table->date('data_inicio');
            $table->date('data_fim');

            $table->timestamps();

            $table->foreign('series_id')
                ->references('series_id')
                ->on('series');

            $table->engine = 'InnoDB';
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('campeonatos');
        Schema::enableForeignKeyConstraints();
    }

}
