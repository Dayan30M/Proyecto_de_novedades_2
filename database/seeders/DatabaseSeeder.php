<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      
        // \App\Models\User::factory(10)->create();
        $this->call([
            
            UserSeeder::class,
           TodosSeeder::class,
           ProgramaSeeder::class,
           FichaSeeder::class,
           AprendizSeeder::class,
           Tipo_pqrSeeder::class,
           PqrSeeder::class,
           NovedadSeeder::class,
           Tipo_novedadSeeder::class
           
           
    
            
            
        ]);
    }
}
