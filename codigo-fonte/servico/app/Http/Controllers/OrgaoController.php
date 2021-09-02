<?php

namespace App\Http\Controllers;

use App\Services\OrgaoService;
use Core\Http\Controllers\AApiResourceController;
use Illuminate\Http\Response;

class OrgaoController extends AApiResourceController
{
    public function __construct(OrgaoService $service)
    {
        parent::__construct($service);
    }

    public function sendResponse($data = [], $message = '', $status = Response::HTTP_OK)
    {
        $responseDefault = [
            'message' => $message,
            'data' => $data,
        ];
        $orgao = array('orgao' => $responseDefault);
        return response()->json($responseDefault, $status);
    }
}
