<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssuntosResource extends JsonResource {



    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'descricao' => $this->descricao,
            'pai' => $this->pai,
            'filhos' => AssuntosResource::collection($this->filhos),
            'quantidade_questoes' => $this->quantidadeQuestoes(
                $request->all()
            ),
        ];
    }

    /* public function with( $request ){
      return [
        'version' => '1.0.0',
        'author_url' => url('https://terminalroot.com.br')
      ];
    } */
}
