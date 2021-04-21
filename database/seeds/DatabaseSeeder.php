<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(SeriesTableSeeder::class);
        $this->call(CampeonatosTableSeeder::class);
        $this->call(TimesTableSeeder::class);
    }

}
