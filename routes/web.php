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
    //RbPREvNumeros
    Route::resource('rbprevAtualizacoes', 'RBPREVNUMEROS\RBPREVInicioController');
    Route::get('rbprevNumeros', 'RBPREVNUMEROS\RBPREVNumerosController@index')->name('rbprevNumeros.index');
    
    
    Route::get('rbprevNumeros/create', 'RBPREVNUMEROS\RBPREVNumerosController@create')->name('rbprevNumeros.create');
    Route::post('rbprevNumeros/create', 'RBPREVNUMEROS\RBPREVNumerosController@store')->name('rbprevNumeros.store');
    
    Route::delete('/rbprevNumeros/{id}', 'RBPREVNUMEROS\RBPREVNumerosController@destroy')->name('rbprevNumeros.destroy');

    //SEFPAG
    Route::resource('folhaPagamento', 'FolhaPagamento\FolhaInicioController');
    
    Route::resource('folhamensal', 'FolhaPagamento\FolhaPagamentoController');
    Route::get('folhaensal/create', 'FolhaPagamento\FolhaPagamentoController@create')->name('inicio.create');
    Route::post('folhamensal/create', 'FolhaPagamento\FolhaPagamentoController@store');
    //Route::get('folhaensal/{id}/edit', 'FolhaPagamento\FolhaPagamentoController@edit')->name('folhamensal.edit');
    //FIM
    Route::get('/upload-pdf', 'Dirf\DirfController@showUploadForm')->name('pdf.showUploadForm');
    Route::post('/upload-pdf', 'Dirf\DirfController@upload')->name('pdf.upload');
    Route::post('/pdfs', 'Dirf\DirfController@store')->name('pdf.store');
    Route::get('/upload-result', 'Dirf\DirfController@showUploadResult');

    Route::get('dirf', 'Dirf\DirfCedulaCController@index')->name('dirf.index');
    Route::get('/dirf/download/{cpf}', 'Dirf\DirfCedulaCController@download')->name('dirf.download');

    Route::get('/dirf/upload', function () {
        return view('dirf.dirf-upload');
    })->name('dirf.up');
    Route::post('/dirf/upload', 'Dirf\DirfCedulaCController@upload')->name('dirf.upload');
    Route::get('/dirf/store/{cpf}', 'Dirf\DirfCedulaCController@store')->name('dirf.store');
    
    
    //Cedula C da Prefeitura
    
    Route::get('dirfpmrb', 'Dirf\DirfCedulaPMRBCController@index')->name('dirf_pmrb.index');
    Route::get('/dirfpmrb/upload', function () {
        return view('dirf_pmrb.dirf-upload');
    })->name('dirf_pmrb.up');
    Route::post('/dirfpmrb/upload', 'Dirf\DirfCedulaPMRBCController@upload')->name('dirf_pmrb.upload');
    Route::get('/dirfpmrb/store/{cpf}', 'Dirf\DirfCedulaPMRBCController@store')->name('dirf_pmrb.store');

    
    
    
    
    
    //Fim
    //Administração ATENDIMENTO
    Route::resource('administracao/atendimentos', 'Administracao\Atendimentos\AtendimentosController');
    Route::get('administracao/atendimentos/create', 'Administracao\Atendimentos\AtendimentosController@create')->name('atendimentos.create');
    Route::post('administracao/atendimentos/create', 'Administracao\Atendimentos\AtendimentosController@store');
    Route::get('/atendimentos/{id?}/pdf', 'Administracao\Atendimentos\AtendimentosController@Verpdf')->name('atendimentos.Verpdf');
    Route::get('/atendimentos/show/{id?}', 'Administracao\Atendimentos\AtendimentosController@show')->name('atendimentos.show');
    Route::delete('/atendimentos/{id}/destroy', 'Administracao\Atendimentos\AtendimentosController@destroy')->name('atendimentos.destroy');

    //
    Route::get('atendimentos/historico', 'Administracao\Atendimentos\HistoricoAtendimentosController@index')->name('atendimentosHistorico.historico');
    //FimatendimentoHistorico
    Route::get('atendimentos/dash', 'Administracao\Atendimentos\DashAtendimentosController@index');

    Route::get('atendimentos/dashboard', 'Administracao\Atendimentos\DashAtendimentosController@countByDayWeek')->name('atendimentos.dash');
    Route::get('tendimentos/pdf', 'Administracao\Atendimentos\DashAtendimentosController@index')->name('atendimentos.pdfGeral');
    Route::get('tendimentos/pdfRecadastramento', 'Administracao\Atendimentos\DashAtendimentosController@relatorioAnual')->name('atendimentos.pdfGeralRecadastramento');
    Route::get('registro/{id}', 'Administracao\Atendimentos\DashAtendimentosController@painel')->name('atendimentos.painel');
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
    //INicio de CTC
    Route::resource('/ctc', 'DIPREV\CTCController');

    Route::get('/ctc/{id}/show', 'DIPREV\CTCController@show')->name('ctc.show');
    Route::get('/ctc/create', 'DIPREV\CTCController@create')->name('ctc.create');
    Route::post('/ctc/create', 'DIPREV\CTCController@store');
    Route::get('events/{id}', 'DIPREV\CTCController@pdf')->name('events.pdf');
    Route::get('/deducao/{id}/edit', 'DIPREV\CTCDeducaoController@edit')->name('deducao.edit');
    Route::put('/ctc/{id}/update', 'DIPREV\CTCDeducaoController@update')->name('deductions.update');
    
    Route::get('/verso/{id}/ctc', 'DIPREV\CTCVersoController@verso')->name('verso.show');
    
    
    Route::get('/verso/{id}/edit', 'DIPREV\CTCVersoController@edit')->name('verso.edit');
    Route::put('/verso/{id}/update', 'DIPREV\CTCVersoController@update')->name('verso.update');

    //Route::get('/getDetails/{id?}', 'DIPREV\CTCController@getDetails');
    // Route::post('get-details','DIPREV\CTCController@getDetails')->name('get-details');

    Route::get('user/details', 'DIPREV\CTCController@getDetails')->name('user.details');

    //fim ctc
    //Inicio de Requerimentos Comulsorios
    Route::resource('/reqCompulsoria', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaController');
    Route::get('/reqCompulsoria/create', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaController@create')->name('reqCompulsoria.create');
    Route::post('/reqCompulsoria/create', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaController@store');
    //
    Route::resource('/dependentes', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaDependenteController')->except(['create', 'show']);
    Route::get('/dependentes/{compulsoria}', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaDependenteController@create')->name('dependentes.create');
    //
    //
    Route::resource('/acumuloCargos', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaAcumuloCargosController')->except(['create', 'show']);
    Route::get('/acumuloCargos/{compulsoria}', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaAcumuloCargosController@create')->name('acumuloCargos.create');
    Route::get(
            '/programa/acumuloCargos/dadosMeta/{compulsoria}/{acumuloCargos}', 'Administracao\reqAposentadorias\reqCompulsoria\reqApCompulsoriaAcumuloCargosController@show')->name('acumuloCargos.show');
    //
    //Fim de Requerimentos Comulsorios
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
    
    
     Route::get('qrcode-with-image/{id}', 'DAF\AlmoxarifadoController@generateQrCodeWithImage')->name('almoxarifado.qrcode-with-image');
  



    //Consulta Filtro
    Route::post('/almoxarifado/filtro', 'DAF\FiltroAlmoxarifadoController@index')->name('almo.buscar');
    Route::get('/almoxarifado/filtro/{query}', 'DAF\FiltroAlmoxarifadoController@index');
    //
    //PDF
    //Relatório PDF
    Route::get("/filtros/relatorios", 'DAF\AlmoxarifadoController@indexRelatorio')->name('relatorio.indexRelatorio');
    Route::any("/filtros/relatorios/{almo_tipo}/{almo_condicao}/{almo_localizacao_dpto}/pdf", 'DAF\AlmoxarifadoController@GeraRelatorioPDF');

    Route::get('/atendimentos/pdfdepartamento', 'DAF\FiltroAlmoxarifadoController@pdf_dpto')->name('pdf.departamento');
    Route::get('/atendimentos/pdfcondicao', 'DAF\FiltroAlmoxarifadoController@pdf_condicao')->name('pdf.condicao');
    Route::get('/atendimentos/pdftipoitem', 'DAF\FiltroAlmoxarifadoController@pdf_tipo_item')->name('pdf.tipoitem');
    Route::get('/atendimentos/pdfresponsavel', 'DAF\FiltroAlmoxarifadoController@pdf_responsavel')->name('pdf.responsavel');

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
    //Fim DAF
});
Auth::routes();

//Route::resource("/requerimentos", "Publico\PedidoPubliController");
//Route::get('requerimentos/create', 'Publico\PedidoPubliController@create')->name('requerimentos.create');
//Route::post('requerimentos/create', 'Publico\PedidoPubliController@store');
//ConsultaPublica
Route::get('/consultaPublica', 'DAF\AlmoxarifadoController@consulta');
Route::post('/consultaPublica/resultado', 'DAF\AlmoxarifadoController@busca')->name('consulta.publica');
//Consulta do QrCode
Route::get('/consulta/{id?}', 'DAF\AlmoxarifadoController@buscaQrCode');

//Rotas para Cécula 
Route::get('/cpf/search', 'Dirf\DirfCedulaCController@search')->name('dirf.search');
Route::post('/cpf/result', 'Dirf\DirfCedulaCController@result')->name('dirf.result');
Route::get('/dirf/not-found', 'Dirf\DirfCedulaCController@cpfNotFound')->name('dirf.not-found');
Route::get('/dirf/store/{cpf}', 'Dirf\DirfCedulaCController@store_c')->name('dirf.store_c');





Route::get('/dirfpmrb/store/{cpf}', 'Dirf\DirfCedulaPMRBCController@store_pmrb')->name('dirf_pmrb.store_c');

Route::get('/dirfpmrb/buscar', 'Dirf\DirfCedulaPMRBCController@search_pmrb')->name('dirf_pmrb.search');
Route::post('/dirfpmrb/resultado', 'Dirf\DirfCedulaPMRBCController@resultado_pmrb')->name('dirf_pmrb.result');

Route::get('/dirfpmrb/not-found', 'Dirf\DirfCedulaPMRBCController@cpfNotFound')->name('dirf_pmrb.not-found');