<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo_pqr;

class Tipo_pqrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_pqr::factory(10)->create();
    }
}
