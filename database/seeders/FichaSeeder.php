<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ficha;

class FichaSeeder extends Seeder
{
    
    public function run()
    {
        Ficha::factory(30)->create();
    }
}
