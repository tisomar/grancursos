<?php

namespace Database\Factories;

use App\Models\Bancas;
use Illuminate\Database\Eloquent\Factories\Factory;

class BancasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bancas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => $this->faker->text(),
        ];
    }
}
