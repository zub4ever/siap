<?php



Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function() {
    
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
//Administração ATENDIMENTO
Route::resource('administracao/atendimentos','Administracao\Atendimentos\AtendimentosController');
Route::get('administracao/atendimentos/create','Administracao\Atendimentos\AtendimentosController@create')->name('atendimentos.create');
Route::post('administracao/atendimentos/create','Administracao\Atendimentos\AtendimentosController@store');
Route::get('/atendimentos/{id?}/pdf','Administracao\Atendimentos\AtendimentosController@Verpdf')->name('atendimentos.Verpdf');
Route::delete('/atendimentos/{id}/destroy','Administracao\Atendimentos\AtendimentosController@destroy')->name('atendimentos.destroy');

//USUARIOS
Route::resource('administracao/users','Administracao\Usuarios\UserController');
Route::resource('administracao/roles','Administracao\Usuarios\RoleController');
//FimUsuários

Route::get('/home', 'HomeController@index')->name('home');
//Requerimentos de Aposentadoria 

Route::resource('administracao/reqAposentadorias','Administracao\reqAposentadorias\reqAposentadoriasController');






//FimRequerimentosAposentadoria 

});
Auth::routes();



    Route::resource("/requerimentos", "Publico\PedidoPubliController");
    Route::get('requerimentos/create','Publico\PedidoPubliController@create')->name('requerimentos.create');
    Route::post('requerimentos/create','Publico\PedidoPubliController@store');
    
    
    
    
    

     