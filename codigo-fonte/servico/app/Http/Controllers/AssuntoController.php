<?php

namespace App\Http\Controllers;

use App\Models\Assuntos;
use App\Http\Resources\AssuntosResource;
use App\Service\AssuntoService;
use Core\Http\Controllers\AApiResourceController;
use Illuminate\Http\Request;
use App\Models\Questoes;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AssuntoController extends AApiResourceController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(AssuntoService $service)
    {
        parent::__construct($service);
    }

    public function index(): \Illuminate\Http\JsonResponse
    {



        return $this->sendResponse(
            AssuntosResource::collection($this->getService()->obterTodos()),
            __('responses.success.index'),
            Response::HTTP_OK
        );
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
