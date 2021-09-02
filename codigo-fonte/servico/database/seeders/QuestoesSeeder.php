<?php

namespace Database\Seeders;

use App\Models\Questoes;
use App\Models\Assuntos;
use App\Models\Bancas;
use App\Models\Orgaos;
use Illuminate\Database\Seeder;

class QuestoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getQuestoes() as $questao) {
            Questoes::firstOrCreate([
                'descricao' => $questao['descricao_questao'],
                'id_orgao' => Orgaos::firstOrCreate(['sigla' => $questao['sigla']])->id,
                'id_banca' => Bancas::firstOrCreate(['descricao' => $questao['descricao_banca']])->id,
                'id_assunto' => Assuntos::firstOrCreate(['descricao' => $questao['descricao_assunto']])->id,
            ]);
        }
    }

    private function getQuestoes()
    {
        return [
            [
                'descricao_questao' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'sigla' => 'CEF',
                'descricao_banca' => 'CEBRASPE',
                'descricao_assunto' => 'Morfologia',

            ],
            [
                'descricao_questao' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'sigla' => 'PGDF',
                'descricao_banca' => 'FGV',
                'descricao_assunto' => 'Morfologia',
            ],
            [
                'descricao_questao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'sigla' => 'CGU',
                'descricao_banca' => 'CESGRANRIO',
                'descricao_assunto' => 'Morfologia - Verbos',

            ],
            [
                'descricao_questao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'sigla' => 'CGU',
                'descricao_banca' => 'CEBRASPE',
                'descricao_assunto' => 'Morfologia - Verbos',
            ],
            [
                'descricao_questao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'sigla' => 'PGDF',
                'descricao_banca' => 'CEBRASPE',
                'descricao_assunto' => 'Morfologia - Pronomes',

            ],
            [
                'descricao_questao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'sigla' => 'CEF',
                'descricao_banca' => 'FGV',
                'descricao_assunto' => 'Morfologia - Pronomes',
            ],

        ];
    }
}
