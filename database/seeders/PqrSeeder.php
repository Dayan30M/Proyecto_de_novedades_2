<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pqr;

class PqrSeeder extends Seeder
{
    
    public function run()
    {
        Pqr::factory(5)->create();
    }
}
