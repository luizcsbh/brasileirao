<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{

    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('series_id');
            $table->string('name',20);
            $table->boolean('complete');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('series');
    }

}
