<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Assuntos;


class AssuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getAssuntos() as $arrAssunto) {
            $assuntosFilhos = array_pop($arrAssunto);
            $assuntoPai = Assuntos::firstOrCreate($arrAssunto);

            foreach ($assuntosFilhos as $assuntoFilho) {

                $assuntoPai->filhos()->attach(Assuntos::firstOrCreate($assuntoFilho)->id);
            }
        }
    }

    private function getAssuntos()
    {
        return [
            [
                'descricao' => 'Português',
                'filhos' => [
                    ['descricao' => 'Morfologia'],
                    ['descricao' => 'Morfologia - Verbos'],
                    ['descricao' => 'Morfologia - Pronomes'],
                ]
            ],
            [
                'descricao' => 'Raciocínio Lógico - RLM',
                'filhos' => [
                    ['descricao' => 'Proposições Simples e Compostas'],
                    ['descricao' => 'Análise Combinatória'],
                    ['descricao' => 'Probabilidade'],
                ]
            ],
            [
                'descricao' => 'Noções de Informática',
                'filhos' => [
                    ['descricao' => 'Sistema Operacional'],
                    ['descricao' => 'Pacote de Aplicativos'],
                    ['descricao' => 'Softwares'],
                ],
            ],
            [
                'descricao' => 'Segurança da Informação',
                'filhos' => [
                    ['descricao' => 'Assinatura Digital'],
                    ['descricao' => 'Ataques e ameaças'],
                    ['descricao' => 'Backup'],
                ],
            ],
        ];
    }
}
