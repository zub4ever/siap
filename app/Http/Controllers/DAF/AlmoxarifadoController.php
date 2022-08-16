<?php

namespace App\Http\Controllers\DAF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest\AlmoFormRequest;
use App\Models\DAF\Almoxarifado\Almo;
use App\Models\DAF\Almoxarifado\AlmoCondicao;
use App\Models\DAF\Almoxarifado\AlmoContrato;
use App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO;
use App\Models\DAF\Almoxarifado\AlmoMarca;
use App\Models\DAF\Almoxarifado\AlmoResponsavel;
use App\Models\DAF\Almoxarifado\AlmoTipo;
use Illuminate\Support\Facades\DB;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

use SimpleSoftwareIO\QrCode\Generator;



class AlmoxarifadoController extends Controller
{

    public function index()
    {

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

        return view('daf.almoxarifado.index', compact('almoxarifado', 'almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo'));
    }

    public function create()
    {

        $almo_condicao = AlmoCondicao::all();
        $almo_contrato = AlmoContrato::all();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::all();
        $almo_marca = AlmoMarca::all();
        $almo_responsavel = AlmoResponsavel::all();
        $almo_tipo = AlmoTipo::all();
        return view('daf.almoxarifado.create', compact('almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo'));
    }

    public function store(AlmoFormRequest $request)
    {

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

    public function edit($id)
    {

        $almoxarifado = Almo::findOrFail($id);

        $almo_condicao = AlmoCondicao::get();
        $almo_contrato = AlmoContrato::get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::get();
        $almo_marca = AlmoMarca::get();
        $almo_responsavel = AlmoResponsavel::get();
        $almo_tipo = AlmoTipo::get();

        return view('daf.almoxarifado.edit', compact('almoxarifado', 'almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo'));
    }

    public function update(AlmoFormRequest $request, $id)
    {

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

    public function destroy($id)
    {

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

    public function Verpdf($id)
    {
        //carrega o PDF
        $almoxarifado = Almo::findOrFail($id);

        $almo_condicao = AlmoCondicao::get();
        $almo_contrato = AlmoContrato::get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::get();
        $almo_marca = AlmoMarca::get();
        $almo_responsavel = AlmoResponsavel::get();
        $almo_tipo = AlmoTipo::get();

        return \PDF::loadView(
            'daf.almoxarifado.pdf.Verpdf',
            compact('almoxarifado', 'almo_condicao', 'almo_contrato', 'almo_localizacao_dpto', 'almo_marca', 'almo_responsavel', 'almo_tipo')
        )
            ->setPaper('A4', 'portrait')
            ->stream();
    }

    public function consulta()
    {
        //Renderiza a pagina de Consulta
        return view('daf.almoxarifado.consultaPublica.consulta');
    }

    public function busca(Request $request)
    {
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

    public function qrCodeGerador(Request $request, $id)
    {

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

    public function buscaQrCode(Request $request, $id)
    {
        $almoxarifado = Almo::buscaQrCode($request->id);
        $almo_tipo = AlmoTipo::get();
        //dd($almoxarifado);
        return view(
            'daf.almoxarifado.consultaPublica.resultadoqrCode',

            [
                'almoxarifado' => $almoxarifado,
                'id' => $request->id
            ],
            compact('almoxarifado', 'almo_tipo')
        );
    }
}
