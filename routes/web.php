<?php

use App\Http\Controllers\DAF\AlmoxarifadoController;

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('index');
    //Cadastro de ervidpr
    Route::resource('servidor', 'Servidor\ServeController');
    Route::get('servidor/create', 'Servidor\ServeController@create')->name('servidor.create');
    Route::get('servidor/show/{id?}', 'Servidor\ServeController@show')->name('servidor.show');
    Route::post('servidor/create', 'Servidor\ServeController@store');
    //Contrato atrelado a servidor
    Route::resource('contratos', 'Contrato\ContractController');
    Route::get('contratos/create', 'Contrato\ContractController@create')->name('contratos.create');
    Route::post('contratos/create', 'Contrato\ContractController@store');
    //
    Route::resource('endereco', 'Endereco\EnderecoController');
    Route::get('endereco/create', 'Endereco\EnderecoController@create')->name('endereco.create');
    Route::post('endereco/create', 'Endereco\EnderecoController@store');
    //
    Route::resource('cadastrosAuxiliares/origem', 'CadastrosAuxiliares\Origin\OriginController');
    Route::get('cadastrosAuxiliares/origem/create', 'CadastrosAuxiliares\Origin\OriginController@create')->name('origem.create');
    Route::post('cadastrosAuxiliares/origem/create', 'CadastrosAuxiliares\Origin\OriginController@store');
    //
    Route::resource('cadastrosAuxiliares/orgao', 'CadastrosAuxiliares\Orgao\OrgaoController');
    Route::get('cadastrosAuxiliares/orgao/create', 'CadastrosAuxiliares\Orgao\OrgaoController@create')->name('orgao.create');
    Route::post('cadastrosAuxiliares/orgao/create', 'CadastrosAuxiliares\Orgao\OrgaoController@store');
    //Funções
    Route::resource('cadastrosAuxiliares/funcao', 'CadastrosAuxiliares\Funcao\FuncaoController');
    Route::get('cadastrosAuxiliares/funcao/create', 'CadastrosAuxiliares\Funcao\FuncaoController@create')->name('funcao.create');
    Route::post('cadastrosAuxiliares/funcao/create', 'CadastrosAuxiliares\Funcao\FuncaoController@store');

    Route::resource('pedido', 'Pedido\PedidoController');

    Route::resource('folhaPagamento', 'FolhaPagamento\FolhaPagamentoController');
    //Administração ATENDIMENTO
    Route::resource('administracao/atendimentos', 'Administracao\Atendimentos\AtendimentosController');
    Route::get('administracao/atendimentos/create', 'Administracao\Atendimentos\AtendimentosController@create')->name('atendimentos.create');
    Route::post('administracao/atendimentos/create', 'Administracao\Atendimentos\AtendimentosController@store');
    Route::get('/atendimentos/{id?}/pdf', 'Administracao\Atendimentos\AtendimentosController@Verpdf')->name('atendimentos.Verpdf');
    Route::delete('/atendimentos/{id}/destroy', 'Administracao\Atendimentos\AtendimentosController@destroy')->name('atendimentos.destroy');

    //USUARIOS
    Route::resource('administracao/users', 'Administracao\Usuarios\UserController');
    Route::resource('administracao/roles', 'Administracao\Usuarios\RoleController');
    //FimUsuários

    Route::get('/home', 'HomeController@index')->name('home');
    //Requerimentos de Aposentadoria

    Route::resource('diprev', 'Administracao\reqAposentadorias\reqAposentadoriasController');
    //Requerimentos de Aposentadoria Voluntaria
    Route::resource('/reqVoluntaria', 'Administracao\reqAposentadorias\ApVoluntaria\reqApVoluntariaController');
    Route::get('/reqVoluntaria/create', 'Administracao\reqAposentadorias\ApVoluntaria\reqApVoluntariaController@create')->name('reqVoluntaria.create');
    Route::post('/reqVoluntaria/create', 'Administracao\reqAposentadorias\ApVoluntaria\reqApVoluntariaController@store');
    Route::get('/reqVoluntaria/show/{id?}', 'Administracao\reqAposentadorias\ApVoluntaria\reqApVoluntariaController@show')->name('reqVoluntaria.show');
    Route::delete('/reqVoluntaria/destroy/{id?}', 'Administracao\reqAposentadorias\ApVoluntaria\reqApVoluntariaController@destroy')->name('reqVoluntaria.destroy');
    Route::get('/reqVoluntaria/pdf/{id?}', 'Administracao\reqAposentadorias\ApVoluntaria\reqApVoluntariaController@pdf')->name('reqVoluntaria.pdf');

    //FimRequerimentosAposentadoria
    //Rotas do Dap

    Route::resource('/dap', 'DAP\DapController');
    //
    Route::get('token', 'DAP\APIController@token')->name('token');
    Route::get('registrar', 'DAP\APIController@registrar')->name('registrar');
    Route::get('listar', 'DAP\APIController@listar')->name('listar');
    Route::get('consultar', 'DAP\APIController@consultar')->name('consultar');
    //Route::get('baixar', 'DAP\APIController@baixar')->name('baixar');
    Route::get('atualizar', 'DAP\APIController@atualizar')->name('atualizar');

    //Route::get('/dap/guiaCNPJ/verGuiaPDF','DAP\APIController')->name('atendimentos.Verpdf');
    //Fim DAP
    //Rotas do DAF

    Route::resource('/daf', 'DAF\DafController');
    //
    Route::resource('/almoxarifado', 'DAF\AlmoxarifadoController');
    Route::get('/almoxarifado/create', 'DAF\AlmoxarifadoController@create')->name('almoxarifado.create');
    Route::post('/almoxarifado/create', 'DAF\AlmoxarifadoController@store');
    Route::get('almoxarifado/show/{id?}', 'DAF\AlmoxarifadoController@show')->name('almoxarifado.show');
    Route::get('/almoxarifado/{id?}/pdf', 'DAF\AlmoxarifadoController@Verpdf')->name('almoxarifado.Verpdf');
    Route::delete('/almoxarifado/{id}/destroy', 'DAF\AlmoxarifadoController@destroy')->name('almoxarifado.destroy');
    //geradorQrCode
    Route::get('/qrcode{id?}', 'DAF\AlmoxarifadoController@qrCodeGerador')->name('qrcode');
    //Consulta Filtro
    Route::post('/almoxarifado/busca/', 'DAF\FiltroAlmoxarifadoController@index')
    ->name('almo.buscar');
    Route::get('/almoxarifado/busca/', 'DAF\FiltroAlmoxarifadoController@index');
    //

    //Departamento Almofaxirado
    Route::resource('/departamento', 'DAF\AlmoDptoController');
    Route::get('/departamento/create', 'DAF\AlmoDptoController@create')->name('departamento.create');
    Route::post('/departamento/create', 'DAF\AlmoDptoController@store');
    Route::delete('/departamento/{id}/destroy', 'DAF\AlmoDptoController@destroy')->name('departamento.destroy');
    //Contratos
    Route::resource('/contrato', 'DAF\AlmoContratoController');
    Route::get('/contrato/create', 'DAF\AlmoContratoController@create')->name('contrato.create');
    Route::post('/contrato/create', 'DAF\AlmoContratoController@store');
    Route::delete('/contrato/{id}/destroy', 'DAF\AlmoContratoController@destroy')->name('contrato.destroy');
    //Responsavel
    Route::resource('/responsavel', 'DAF\AlmoResponsavelController');
    Route::get('/responsavel/create', 'DAF\AlmoResponsavelController@create')->name('responsavel.create');
    Route::post('/responsavel/create', 'DAF\AlmoResponsavelController@store');
    Route::delete('/responsavel/{id}/destroy', 'DAF\AlmoResponsavelController@destroy')->name('responsavel.destroy');
    //Marcas
    Route::resource('/marca', 'DAF\AlmoMarcaController');
    Route::get('/marca/create', 'DAF\AlmoMarcaController@create')->name('marca.create');
    Route::post('/marca/create', 'DAF\AlmoMarcaController@store');
    Route::delete('/marca/{id}/destroy', 'DAF\AlmoMarcaController@destroy')->name('marca.destroy');
    //Fim DAP
});
Auth::routes();

Route::resource("/requerimentos", "Publico\PedidoPubliController");
Route::get('requerimentos/create', 'Publico\PedidoPubliController@create')->name('requerimentos.create');
Route::post('requerimentos/create', 'Publico\PedidoPubliController@store');





//ConsultaPublica
Route::get('/consultaPublica', 'DAF\AlmoxarifadoController@consulta');
Route::post('/consultaPublica/resultado', 'DAF\AlmoxarifadoController@busca')->name('consulta.publica');
//Consulta do QrCode
Route::get('/consulta/{id?}', 'DAF\AlmoxarifadoController@buscaQrCode');
