<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name' => 'Dayan',
            'apellido' => 'Mejia',
            'telefono' => '3208051839',
            'tipo_documento'=> 'CC',
            'num_documento' => 1000620667,
           'email' =>'damejia@misena.edu.co',
           'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // password
           ] );
    }
}
