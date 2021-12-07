<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Novedad;


class NovedadSeeder extends Seeder
{
    
    public function run()
    {
        Novedad::factory(5)->create();
    }
}
