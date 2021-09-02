<?php

namespace Database\Seeders;

use App\Models\Orgaos;
use Illuminate\Database\Seeder;

class OrgaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getOrgaos() as $orgao) {
            Orgaos::firstOrCreate($orgao);
        }
    }

    private function getOrgaos()
    {
        return [
            [
                'descricao' => 'Procuradoria Geral do Distrito Federal',
                'sigla' => 'PGDF'
            ],
            [
                'descricao' => 'Caixa Econômica Federal',
                'sigla' => 'CEF'
            ],
            [
                'descricao' => 'Controladoria Geral da União',
                'sigla' => 'CGU'
            ],
        ];
    }
}
