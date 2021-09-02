<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BancaController;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\AssuntoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([
    'prefix' => 'grancursos'
], function ($router) {
    Route::apiResource('banca', BancaController::class)
        ->only(['index']);
    Route::apiResource('orgao', OrgaoController::class)
        ->only(['index']);
    Route::apiResource('assunto', AssuntoController::class)
        ->only(['index']);
});




