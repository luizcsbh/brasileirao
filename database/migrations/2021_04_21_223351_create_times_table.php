<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesTable extends Migration
{
    
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->increments('times_id');
            $table->integer('campeonatos_id')->unsigned()->index();
            $table->string('name');
            $table->smallInteger('jogos');
            $table->smallInteger('pontos');
            $table->smallInteger('vitorias');
            $table->smallInteger('empates');
            $table->smallInteger('derrotas');
            $table->smallInteger('gols_pro');
            $table->smallInteger('gols_contra');
            $table->smallInteger('saldo_gols');

            $table->timestamps();

            $table->foreign('campeonatos_id')
                ->references('campeonatos_id')
                ->on('campeonatos');
            
            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('times');
    }
    
}
