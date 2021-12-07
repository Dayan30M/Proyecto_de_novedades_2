<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
        'name' =>'Paul',
        'apellido'=>'Rodriguez',
        'telefono'=>'320098757',
        'id_tipo_funcionario'=>'2',
        'tipo_documento'=>'CC',
        'num_documento'=>'10008526787',
        'rol'=>'1',
        'email'=>'paul@gmail.com',
        'password'=>Hash::make('admin'),
        ]);

        $user=User::create([
            'name' =>'Paul',
            'apellido'=>'Rodriguez',
            'telefono'=>'320098757',
            'id_tipo_funcionario'=>'2',
            'tipo_documento'=>'CC',
            'num_documento'=>'10078526787',
            'rol'=>'2',
            'email'=>'saul@gmail.com',
            'password'=>Hash::make('user'),
            ]);

        $moder=User::create([
            'name' =>'Paul',
                'apellido'=>'Rodriguez',
                'telefono'=>'320098757',
                'id_tipo_funcionario'=>'2',
                'tipo_documento'=>'CC',
                'num_documento'=>'10009526787',
                'rol'=>'3',
                'email'=>'raul@gmail.com',
                'password'=>Hash::make('moder'),
                ]);
    }
}
