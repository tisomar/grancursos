<?php

namespace Database\Seeders;

use App\Models\Bancas;
use Illuminate\Database\Seeder;

class BancasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getBancas() as $banca) {
            Bancas::firstOrCreate($banca);
        }
    }

    private function getBancas()
    {
        return [
            ['descricao' => 'CEBRASPE'],
            ['descricao' => 'FGV'],
            ['descricao' => 'CESGRANRIO'],
        ];
    }
}
