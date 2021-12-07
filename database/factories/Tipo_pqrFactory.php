<?php

namespace Database\Factories;

use App\Models\Tipo_pqr;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Tipo_pqrFactory extends Factory
{

    protected $model = Tipo_pqr::class;


    public function definition()
    {
        return [
            'nom_tipo_pqr' => $this->faker->name()
        ];
    }
}
