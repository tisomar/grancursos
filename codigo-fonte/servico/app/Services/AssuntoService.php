<?php


namespace App\Service;


use App\Models\Assuntos as AssuntoModel;
use Core\Services\AApiResourceService;
use Illuminate\Support\Collection;

class AssuntoService extends AApiResourceService
{
    public function __construct(AssuntoModel $model)
    {
        parent::__construct($model);
    }

    public function obterTodos(): ?Collection
    {
        return $this->getModel()->assuntosRaiz()->get();
    }
}
