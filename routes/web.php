<?php



Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {
Route::get('/home', 'HomeController@index')->name('index');
//Cadastro de ervidpr
Route::resource('servidor','Servidor\ServeController');
Route::get('servidor/create','Servidor\ServeController@create')->name('servidor.create');
Route::post('servidor/create','Servidor\ServeController@store');
//Contrato atrelado a servidor
Route::resource('contrato','Contrato\ContractController');
Route::get('contrato/create','Contrato\ContractController@create')->name('contrato.create');
Route::post('contrato/create','Contrato\ContractController@store');
//
Route::resource('endereco','Endereco\EnderecoController');
Route::get('endereco/create','Endereco\EnderecoController@create')->name('endereco.create');
Route::post('endereco/create','Endereco\EnderecoController@store');
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


Route::resource('pedido','Pedido\PedidoController');


Route::resource('folhaPagamento','FolhaPagamento\FolhaPagamentoController');








});
Auth::routes();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



    Route::get("/requerimentos", "Publico\PedidoPubliController@index");
    Route::get("/requerimentos", "Publico\PedidoPubliController@apVoluntaria");
    
    

     