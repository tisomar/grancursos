<?php


namespace App\Services;


use App\Models\Orgaos as OrgaoModel;
use Core\Services\AApiResourceService;

class OrgaoService extends AApiResourceService
{
    public function __construct(OrgaoModel $model)
    {
        parent::__construct($model);
    }
}
