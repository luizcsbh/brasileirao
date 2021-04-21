<?php

use App\Models\Serie;
use Faker\Generator as Faker;

$factory->define(Serie::class, function (Faker $faker) {
    
    return [
        'name'=>$faker->name,
        'complete'=>true
    ];

});
