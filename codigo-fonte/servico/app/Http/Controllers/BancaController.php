<?php

namespace App\Http\Controllers;

use App\Services\BancaService;
use Core\Http\Controllers\AApiResourceController;
use Illuminate\Http\Response;

class BancaController extends AApiResourceController
{
    public function __construct(BancaService $service)
    {
        parent::__construct($service);
    }

    public function sendResponse($data = [], $message = '', $status = Response::HTTP_OK)
    {
        $responseDefault = [
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($responseDefault, $status);
    }
}
