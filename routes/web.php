<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::resource('servidor','Servidor\ServeController');
Route::get('servidor/create','Servidor\ServeController@create')->name('servidor.create');
Route::post('servidor/create','Servidor\ServeController@store');

//
Route::resource('cadastrosAuxiliares/origem','CadastrosAuxiliares\Origin\OriginController');
Route::get('cadastrosAuxiliares/origem/create','CadastrosAuxiliares\Origin\OriginController@create')->name('origem.create');
Route::post('cadastrosAuxiliares/origem/create','CadastrosAuxiliares\Origin\OriginController@store');
//
Route::resource('cadastrosAuxiliares/orgao','CadastrosAuxiliares\Orgao\OrgaoController');
Route::get('cadastrosAuxiliares/orgao/create','CadastrosAuxiliares\Orgao\OrgaoController@create')->name('orgao.create');
Route::post('cadastrosAuxiliares/orgao/create','CadastrosAuxiliares\Orgao\OrgaoController@store');
//Funções 
Route::resource('cadastrosAuxiliares/funcao','CadastrosAuxiliares\Funcao\FuncaoController');
Route::get('cadastrosAuxiliares/funcao/create','CadastrosAuxiliares\Funcao\FuncaoController@create')->name('funcao.create');
Route::post('cadastrosAuxiliares/funcao/create','CadastrosAuxiliares\Funcao\FuncaoController@store');