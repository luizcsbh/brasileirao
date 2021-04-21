<?php

use Faker\Generator as Faker;
use App\Models\Time;

$factory->define(Time::class, function (Faker $faker) {
    
    return [
        'campeonatos_id'=>number_format(1,1),
        'name'=>$faker->name,
        'jogos'=>number_format(1,1),
        'pontos'=>number_format(1,1),
        'vitorias'=>number_format(1,1),
        'empates'=>number_format(1,1),
        'derrotas'=>number_format(1,1),
        'gols_pro'=>number_format(1,1),
        'gols_contra'=>number_format(1,1),
        'saldo_gols'=>number_format(1,1)
    ];
    
});
