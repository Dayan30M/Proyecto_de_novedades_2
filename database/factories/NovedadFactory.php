<?php

namespace Database\Factories;

use App\Models\Novedad;
use Illuminate\Database\Eloquent\Factories\Factory;

class NovedadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Novedad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aprendiz_id' => random_int(1,10),
            'nom_novedad' => $this->faker->name(),
            'fecha_peticion' => $this->faker->name(),
            'motivo' => $this->faker->name()

        ];
    }
}
