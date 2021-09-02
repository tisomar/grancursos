<?php

namespace Database\Factories;

use App\Models\Assuntos;
use App\Models\Bancas;
use App\Models\Orgaos;
use App\Models\Questoes;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestoesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Questoes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => $this->faker->text(),
            'id_assunto' => Assuntos::factory(),
            'id_orgao' => Orgaos::factory(),
            'id_banca' => Bancas::factory(),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
