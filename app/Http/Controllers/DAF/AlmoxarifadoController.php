<?php

namespace App\Http\Controllers\DAF;

use App\Serve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest\AlmoFormRequest;
use App\Models\DAF\Almoxarifado\Almo;
use App\Models\DAF\Almoxarifado\AlmoCedido;
use App\Models\DAF\Almoxarifado\AlmoCondicao;
use App\Models\DAF\Almoxarifado\AlmoContrato;
use App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO;
use App\Models\DAF\Almoxarifado\AlmoMarca;
use App\Models\DAF\Almoxarifado\AlmoResponsavel;
use App\Models\DAF\Almoxarifado\AlmoTipo;
use Illuminate\Support\Facades\DB;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\Generator;

class AlmoxarifadoController extends Controller {

    public function show($id) {

        $almoxarifado = Almo::findOrFail($id);
        $almo_condicao = DB::table('almoxarifado_condicao')->get()->all();
        $almo_contrato = DB::table('almoxarifado_contrato')->get()->all();
        $almo_localizacao_dpto = DB::table('almoxarifado_localizacao_dpto')->get()->all();
        $almo_marca = DB::table('almoxarifado_marca')->get()->all();
        $almo_responsavel = DB::table('almoxarifado_responsavel')->get()->all();
        $almo_tipo = DB::table('almoxarifado_tipo')->get()->all();
        $almo_cedido = DB::table('almoxarifado_cedido')->get()->all();

        return view('daf.almoxarifado.show', compact('almoxarifado', 'almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo', 'almo_cedido'));
    }

    public function index() {

        //$almoxarifado = DB::table('almoxarifado')->get()->all();
        $almoxarifado = Almo::where('status', 1)
                ->orderBY('id', 'asc')
                ->get();

        $almo_condicao = DB::table('almoxarifado_condicao')->get()->all();
        $almo_contrato = DB::table('almoxarifado_contrato')->get()->all();
        $almo_localizacao_dpto = DB::table('almoxarifado_localizacao_dpto')->get()->all();
        $almo_marca = DB::table('almoxarifado_marca')->get()->all();
        $almo_responsavel = DB::table('almoxarifado_responsavel')->get()->all();
        $almo_tipo = DB::table('almoxarifado_tipo')->get()->all();
        $almo_cedido = DB::table('almoxarifado_cedido')->get()->all();

        return view('daf.almoxarifado.index', compact('almoxarifado', 'almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo', 'almo_cedido'),
                [
                    'almoxarifado' => $almoxarifado,
                    'almo_condicao' => $almo_condicao,
                    'almo_tipo' => $almo_tipo,
                    'almo_localizacao_dpto' => $almo_localizacao_dpto,
                ]
        );
    }

    public function create() {

        $almo_condicao = AlmoCondicao::all();
        $almo_contrato = AlmoContrato::all();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::all();
        $almo_marca = AlmoMarca::all();
        $almo_responsavel = AlmoResponsavel::all();
        $almo_tipo = AlmoTipo::all();
        $almo_cedido = AlmoCedido::all();
        return view('daf.almoxarifado.create', compact('almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo', 'almo_cedido'));
    }

    public function store(AlmoFormRequest $request) {

        DB::beginTransaction();

        $almoxarifado = Almo::create($request->all());

        if (!$almoxarifado) {
            DB::rollBack();
            return redirect()->route('almoxarifado.index')->with('error', "Falha ao cadastrar o Item.");
        }
        $almoxarifado->save();
        DB::commit();

        return redirect()->route('almoxarifado.index')->with(
                        'success',
                        "Item cadastrado com sucesso."
        );
    }

    public function edit($id) {

        $almoxarifado = Almo::findOrFail($id);
        $almo_cedido = AlmoCedido::get();
        $almo_condicao = AlmoCondicao::get();
        $almo_contrato = AlmoContrato::get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::get();
        $almo_marca = AlmoMarca::get();
        $almo_responsavel = AlmoResponsavel::get();
        $almo_tipo = AlmoTipo::get();

        return view('daf.almoxarifado.edit', compact('almoxarifado', 'almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo', 'almo_cedido'));
    }

    public function update(AlmoFormRequest $request, $id) {

        $almoxarifado = Almo::findOrFail($id);

        DB::beginTransaction();

        if (!$almoxarifado->update($request->all())) {

            DB::rollBack();
            return redirect()->route('almoxarifado.index')->with('error', "Falha na alteração do item.");
        }

        DB::commit();

        return redirect()->route('almoxarifado.index')->with(
                        'success',
                        "Item alterado com sucesso."
        );
    }

    public function destroy($id) {

        $almoxarifado = Almo::findOrFail($id);

        DB::beginTransaction();

        if (!$almoxarifado->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('almoxarifado.index')->with('error', "Falha ao deletar o Item.");
        }

        DB::commit();

        return redirect()->route('almoxarifado.index')->with(
                        'success',
                        "Item deletado com sucesso."
        );
    }

    public function Verpdf($id) {
        //carrega o PDF
        $almoxarifado = Almo::findOrFail($id);

        $almo_condicao = AlmoCondicao::get();
        $almo_cedido = AlmoCedido::get();
        $almo_contrato = AlmoContrato::get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::get();
        $almo_marca = AlmoMarca::get();
        $almo_responsavel = AlmoResponsavel::get();
        $almo_tipo = AlmoTipo::get();

        return \PDF::loadView(
                                'daf.almoxarifado.pdf.Verpdf',
                                compact('almoxarifado', 'almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo', 'almo_cedido')
                        )
                        ->setPaper('A4', 'portrait')
                        ->stream();
    }

    public function consulta() {
        //Renderiza a pagina de Consulta
        return view('daf.almoxarifado.consultaPublica.consulta');
    }

    public function busca(Request $request) {
        $query = Almo::query();

        if ($request->has('nm_patrimonio')) {
            $query->where('nm_patrimonio', 'LIKE', '%' . $request->nm_patrimonio . '%');
        }
        $almo_tipo = AlmoTipo::get();
        $almoxarifado = $query->paginate();
        return view('daf.almoxarifado.consultaPublica.resultado', [
            'almoxarifado' => $almoxarifado,
            'nm_patrimonio' => $request->nm_patrimonio,
            'almo_tipo' => $almo_tipo
        ]);
    }

    public function qrCodeGerador(Request $request, $id) {

        $almoxarifado = Almo::QrCodeGera($request->id);
        //dd($almoxarifado);
        return view(
                'daf.almoxarifado.qrcode',
                [
                    'almoxarifado' => $almoxarifado,
                    'id' => $request->id
                ],
                compact('almoxarifado')
        );
    }

    public function buscaQrCode(Request $request, $id) {
        $almoxarifado = Almo::buscaQrCode($request->id);
        $almo_tipo = AlmoTipo::get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::get();
        //dd($almoxarifado);
        return view(
                'daf.almoxarifado.consultaPublica.resultadoqrCode',
                [
                    'almoxarifado' => $almoxarifado,
                    'id' => $request->id
                ],
                compact('almoxarifado', 'almo_tipo', 'almo_localizacao_dpto')
        );
    }

    public function indexRelatorio(Request $request) {
        $almo_tipo = $request->query('almo_tipo');
        $almo_condicao = $request->query('almo_condicao');
        $almo_localizacao_dpto = $request->query('almo_localizacao_dpto');

        $i = 0;
        $users = DB::table('users')->get()->all();
        $almoxarifado = Almo::get();
        $almo_condicao = AlmoCondicao::get();
        $almo_tipo = AlmoTipo::get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::get();
        $almo_localizacao_dpto = Atendimento::get();

        return view('daf.almoxarifado.indexRelatorio', ['i' => $i,
            'almoxarifado' => $almoxarifado,
            'almo_condicao' => $almo_condicao,
            'almo_tipo' => $almo_tipo,
            'almo_localizacao_dpto' => $almo_localizacao_dpto,
            'users' => $users
                ]
        );
    }

    public function GeraRelatorioPDF($almo_tipo, $almo_condicao, $almo_localizacao_dpto) {


        $i = 0;
        $users = DB::table('users')->get()->all();
        $i = 0;
        $users = DB::table('users')->get()->all();
        $almoxarifado = Almo::get();
        $almo_condicao = AlmoCondicao::get();
        $almo_tipo = AlmoTipo::get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::get();

        return PDF::loadView('daf.almoxarifado.pdf.relatoriopdf', ['i' => $i,
                            'almoxarifado' => $almoxarifado,
                            'almo_condicao' => $almo_condicao,
                            'almo_tipo' => $almo_tipo,
                            'almo_localizacao_dpto' => $almo_localizacao_dpto,
                            'users' => $users
                                ]
                        )
                        ->setPaper('A4', "landscape")
                        // Altera o papel para modo paisagem.  "landscape"
                        //Altera o papel para modo Retrato.    'portrait'
                        ->stream('relatorio_daf.pdf');
    }

}
