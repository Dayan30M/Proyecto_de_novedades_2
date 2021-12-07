<?php

namespace Database\Factories;

use App\Models\Tipo_novedad;
use Illuminate\Database\Eloquent\Factories\Factory;



class Tipo_novedadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tipo_novedad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_realizacion' => $this->faker->name(),
            'respuesta'=> $this->faker->name(),
            'observacion'=> $this->faker->name(),
            'fecha_reintegro' => $this->faker->name(),
            'estado_nov'=> $this->faker->name(),
            'novedad_id' => random_int(1,5)
        ];
    }
}
