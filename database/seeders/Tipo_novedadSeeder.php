<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo_novedad;

class Tipo_novedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_novedad::factory(5)->create();
    }
}
