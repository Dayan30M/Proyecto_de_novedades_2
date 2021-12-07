<?php

namespace Database\Factories;

use App\Models\Ficha;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FichaFactory extends Factory
{
    protected $model = Ficha::class;

    public function definition()
    {
        return [
        
            'num_ficha'  => random_int(1,10),
            'programa_id' => random_int(1,10)
            


           // 'email' => $this->faker->unique()->safeEmail(),

        ];
    }
}
