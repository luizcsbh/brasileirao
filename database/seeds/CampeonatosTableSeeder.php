<?php

use Illuminate\Database\Seeder;
use App\Models\Campeonato;

class CampeonatosTableSeeder extends Seeder
{
    
    public function run()
    {
       
        factory(Campeonato::class)->create([
            'series_id'=>1,
            'name'=>'Campeonato Brasileiro',
            'description'=>'Campeonato Brasileiro de Futebol Profissional de Elite',
            'data_inicio'=>'2021-02-02',
            'data_fim'=>'2021-12-12'
        ]);

        factory(Campeonato::class)->create([
            'series_id'=>2,
            'name'=>'Campeonato Brasileiro',
            'description'=>'Campeonato Brasileiro de Futebol Profissional Segunda Divisão',
            'data_inicio'=>'2021-02-02',
            'data_fim'=>'2021-12-12'
        ]);
        
        factory(Campeonato::class)->create([
            'series_id'=>3,
            'name'=>'Campeonato Brasileiro',
            'description'=>'Campeonato Brasileiro de Futebol Profissional Terceira Divisão',
            'data_inicio'=>'2021-02-02',
            'data_fim'=>'2021-12-12'
        ]);

        factory(Campeonato::class)->create([
            'series_id'=>4,
            'name'=>'Campeonato Brasileiro',
            'description'=>'Campeonato Brasileiro de Futebol Amador Primeira Divisão',
            'data_inicio'=>'2021-02-02',
            'data_fim'=>'2021-12-12'
        ]);

        factory(Campeonato::class)->create([
            'series_id'=>5,
            'name'=>'Campeonato Brasileiro',
            'description'=>'Campeonato Brasileiro de Futebol Amador Segunda Divisão',
            'data_inicio'=>'2021-02-02',
            'data_fim'=>'2021-12-12'
        ]);

        factory(Campeonato::class)->create([
            'series_id'=>6,
            'name'=>'Campeonato Brasileiro',
            'description'=>'Campeonato Brasileiro de Futebol Amador Terceira Divisão',
            'data_inicio'=>'2021-02-02',
            'data_fim'=>'2021-12-12'
        ]);
        
    }
    
}
