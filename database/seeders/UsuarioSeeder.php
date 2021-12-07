<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Usuario::create([
           'nombre' => 'SENA',
           'apellido' => 'Mejia',
           'telefono' => '35262772',
           'email' =>'damejia@misena.edu.co',
           'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // password
           ] );
    }
}
