<?php

namespace Database\Factories;

use App\Models\Pqr;
use Illuminate\Database\Eloquent\Factories\Factory;

class PqrFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pqr::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => random_int(1,50),
            'respuesta'=> $this->faker->name(),
            'observacion_pqr'=> $this->faker->name(),
            'estado'=> $this->faker->name()
    
        ];
    }
}
