<?php

namespace Database\Factories;

use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProgramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Programa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_program'  => Str::random(5),
          'tipo_program' => Str::random(5)

           // 'nom_program' => $this->faker->name(),
            //'tipo_program'=> $this->faker->name()
        ];
    }
}
