<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssuntosFilhos extends JsonResource {
    public function toArray($request){
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'descricao' => $this->descricao,

        ];
    }

    /* public function with( $request ){
      return [
        'version' => '1.0.0',
        'author_url' => url('https://terminalroot.com.br')
      ];
    } */
}
