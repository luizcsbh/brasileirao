<?php

use App\Models\Campeonato;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Campeonato::class, function (Faker $faker) {
    
    return [
        'series_id'=>number_format(1,1),
        'name'=>$faker->name,
        'description'=>Str::random(255),
        'data_inicio'=>$faker->date,
        'data_fim'=>$faker->date
    ];
    
});