<?php


namespace App\Services;


use App\Models\Bancas as BancaModel;
use Core\Services\AApiResourceService;

class BancaService extends AApiResourceService
{
    public function __construct(BancaModel $model)
    {
        parent::__construct($model);
    }
}
