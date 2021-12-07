<?php

namespace Database\Factories;

use App\Models\Aprendiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class AprendizFactory extends Factory
{
    
    protected $model = Aprendiz::class;

    
    public function definition()
    {
        return [
            'nom_apren'=>$this->faker->name(),
            'apelli_apren'=>$this->faker->name(),
            'tel_apren' => random_int(1,50),
            'estado_apren'=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'tipo_doc_apren'=>$this->faker->name(),
            'num_doc_apren' => random_int(1,50),
            'ficha_id' => random_int(1,10)
            //'user_id'=>random_int(1,10),
           
        ];
    }
}
