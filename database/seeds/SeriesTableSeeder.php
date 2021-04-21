<?php

use App\Models\Serie;
use Illuminate\Database\Seeder;


class SeriesTableSeeder extends Seeder
{

    public function run()
    {
        
        factory(Serie::class)->create([
            'name'=>'Série A',
            'complete'=>true
        ]);

        factory(Serie::class)->create([
            'name'=>'Série B',
            'complete'=>true
        ]);

        factory(Serie::class)->create([
            'name'=>'Série C',
            'complete'=>true
        ]);

        factory(Serie::class)->create([
            'name'=>'Série D',
            'complete'=>true
        ]);

        factory(Serie::class)->create([
            'name'=>'Série E',
            'complete'=>true
        ]);

        factory(Serie::class)->create([
            'name'=>'Série F',
            'complete'=>true
        ]);
    }
}
