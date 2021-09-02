<?php

namespace Database\Factories;

use App\Models\Assuntos;
use App\Models\AssuntosFilhos;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssuntosFilhosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AssuntosFilhos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_assunto_pai' => Assuntos::factory(),
            'id_assunto_filho' => Assuntos::factory(),
        ];
    }
}
