<?php

namespace App\Http\Controllers\Administracao\Atendimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\AtendimentoFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Atendimento;
use App\AtendimentoStatus;
use PDF;
use Carbon\Carbon;
use Gate;
use App\AtendimentoAssunto;
use App\City;
use App\State;
use App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO;
use Khill\Lavacharts\Lavacharts;

class DashAtendimentosController extends Controller {

    public function index() {

        //select count(*) from atendimento where extract (month from created_at) = 11;
        $atendimentos = DB::table('atendimento')->get();

        $countTotal = DB::table('atendimento as c')->count();

        $counts = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id')
                        ->where('c.atendimento_status_id', '=', '1')->count();
        //Denuncias Fechadas
        $countFechadas = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id')
                        ->where('c.atendimento_status_id', '=', '2')->count();
        $countAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id')
                        ->where('c.atendimento_status_id', '=', '3')->count();

        $birthday_people = DB::select('select count(*)as Novembro from atendimento where extract (month from created_at) = 11');
        
        dd($birthday_people);
        
        
        
        
        
        //ContagemSEMANA
        $domingoAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("DAYOFWEEK(to_char(c.created_at))"), '1')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(to_char(c.created_at))"))->count();

        $segundaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '2')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();

        $tercaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '3')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();

        $quartaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '4')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();

        $quintaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '5')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();

        $sextaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '6')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();

        $sabadoAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '7')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();

        $domingoFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '1')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $segundaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '2')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $tercaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '3')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $quartaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '4')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $quintaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '5')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $sextaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '6')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $sabadoFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '7')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        //SEMANA EM ANDAMENTO
        $domingoAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '1')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $segundaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '2')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $tercaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '3')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $quartaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '4')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $quintaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '5')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $sextaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '6')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();
        $sabadoAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("DAYOFWEEK(c.created_at)"), '7')
                        ->where(DB::raw("YEARWEEK(NOW())"), DB::raw("YEARWEEK(c.created_at)"))->count();

        $data = Carbon::now();

        $lava = new Lavacharts;

        $finances = \Lava::DataTable();
        $finances->addStringColumn('Atendimento')
                ->addNumberColumn('Abertas')
                ->addRoleColumn('string', 'style')
                ->addNumberColumn('Fechadas')
                ->addRoleColumn('string', 'style')
                ->addNumberColumn('Andamento')
                ->addRoleColumn('string', 'style');
        $finances->addRow(['Domingo', $domingoAberta, '#67CB42', $domingoFechada, '#17B7B5', $domingoAndamento, '#CDD71C'])
                ->addRow(['Segunda-feira', $segundaAberta, '#67CB42', $segundaFechada, '#17B7B5', $segundaAndamento, '#CDD71C'])
                ->addRow(['Terça-feira', $tercaAberta, '#67CB42', $tercaFechada, '#17B7B5', $tercaAndamento, '#CDD71C'])
                ->addRow(['Quarta-feira', $quartaAberta, '#67CB42', $quartaFechada, '#17B7B5', $quartaAndamento, '#CDD71C'])
                ->addRow(['Quinta-feira', $quintaAberta, '#67CB42', $quintaFechada, '#17B7B5', $quintaAndamento, '#CDD71C'])
                ->addRow(['Sexta-feira', $sextaAberta, '#67CB42', $sextaFechada, '#17B7B5', $sextaAndamento, '#CDD71C'])
                ->addRow(['Sábado', $sabadoAberta, '#67CB42', $sabadoFechada, '#17B7B5', $sabadoAndamento, '#CDD71C']);

        \LAVA::ColumnChart('Finances', $finances, [
            'title' => '',
            'legend' => 'none',
            'backgroundColor' => '#EAEAEE',
            'vAxis' => [
                'title' => 'Quantidade'
            ],
            'titleTextStyle' => [
                'color' => '#0000',
                'fontSize' => 14
            ],
            'vAxis' => [
                'gridlines' => ['count' => -1]
            ]
        ]);

        return view("administracao.atendimentosDash.index", compact('atendimentos', 'counts', 'countFechadas', 'countAndamento'));
    }

    public function create() {



        $atendimento_status = DB::table('atendimento_status')->get();
        $atendimento_assunto = DB::table('atendimento_assunto')->get();
        $city = DB::table('city')->get();
        $state = DB::table('state')->get();
        $almo_localizacao_dpto = DB::table('almoxarifado_localizacao_dpto')->get()->all();

        return view('administracao.atendimentos.create', compact('atendimento_status', 'atendimento_assunto', 'almo_localizacao_dpto', 'city', 'state'));
    }

    public function store(AtendimentoFormRequest $request) {



        DB::beginTransaction();
        //$denuncias->status_id ='1';
        // $request->request->add(['id_status_liberacao_projeto' => 1]);


        $request->request->add(['atendimento_status_id' => 1]);
        $atendimentos = Atendimento::create($request->all());

        if (!$atendimentos) {
            DB::rollBack();
            return redirect()->route('atendimentos.index')->with('error', "Falha ao cadastrar um atendimento.");
        }

        DB::commit();

        return redirect()->route('atendimentos.index')->with(
                        'success',
                        "Atendimento cadastrado com sucesso."
        );
    }

    public function edit($id) {

        $atendimentos = Atendimento::findOrFail($id);

        $atendimento_status = AtendimentoStatus::all();
        $city = City::all();
        $state = State::all();
        $atendimento_assunto = AtendimentoAssunto::all();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::all();

        return view('administracao.atendimentos.edit', compact('atendimentos', 'atendimento_status', 'atendimento_assunto', 'city', 'state', 'almo_localizacao_dpto'));
    }

    public function update(AtendimentoFormRequest $request, $id) {
        $atendimentos = Atendimento::findOrFail($id);

        DB::beginTransaction();

        if (!$atendimentos->update($request->all())) {

            DB::rollBack();
            return redirect()->route('atendimentos.index')->with('error', "Falha em alterar o atendimento.");
        }

        DB::commit();

        return redirect()->route('atendimentos.index')->with(
                        'success',
                        "Atendimento alterado com sucesso."
        );
    }

    public function Verpdf($id) {
        $atendimentos = Atendimento::findOrFail($id);
        $city = City::all();
        $state = State::all();
        $atendimento_assunto = AtendimentoAssunto::all();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::all();

        return \PDF::loadView('administracao.atendimentos.pdf.Verpdf',
                                compact('atendimentos', 'city', 'state', 'atendimento_assunto', 'almo_localizacao_dpto')
                        )
                        ->setPaper('A4', 'portrait')
                        ->stream();
    }

    public function destroy($id) {

        $atendimentos = Atendimento::findOrFail($id);

        DB::beginTransaction();

        if (!$atendimentos->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('atendimentos.index')->with('error', "Falha ao deletar o Atendimento.");
        }

        DB::commit();

        return redirect()->route('atendimentos.index')->with(
                        'success',
                        "Atendimento deletado com sucesso."
        );
    }

    //Historico de atendimentos
}
