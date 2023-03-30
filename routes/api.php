<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIs\ServeAPIController;
use App\Http\Controllers\APIs\RBPREVNUMEROSAPIController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List
Route::get('servidor', 'APIs\ServeAPIController@index');

// List single
Route::get('servidor/{id}', [ServeAPIController::class, 'show']);

//Folha de pagamento
Route::get('folhaPagamentoMensal', 'APIs\FolhaPgtoAPIController@index');

//RBPREVNUMEROS
Route::get('rbprevnumeros', 'APIs\RBPREVNUMEROSAPIController@index');
Route::get('rbprevnumeros/show/{id}', 'APIs\RBPREVNUMEROSAPIController@show');
//FImrbprevnumeros

//CTCCertidao
Route::get('ctc_emitidas', 'APIs\CTCAPIController@index');

//COnselhos
Route::get('conselhosapi','APIs\ConselhosAPIController@index'); //APIGERAL
Route::get('conselhosapicaps','APIs\ConselhosAPIController@index_caps');
Route::get('conselhosapicoin','APIs\ConselhosAPIController@index_coin');
Route::get('conselhosapicofin','APIs\ConselhosAPIController@index_cofin');
Route::get('conselhosapi/show/{id}','APIs\ConselhosAPIController@showPdf');
//FimConselho
//ProcessosHomologadosPeloTCE
Route::get('processosTCE','APIs\ProcessosTCEAPIController@index'); //APIGERAL