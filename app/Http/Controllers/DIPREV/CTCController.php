<?php

namespace App\Http\Controllers\DIPREV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Serve;
use App\Origin;
use App\Funcao;
use App\Orgao;
use App\Contract;
class CTCController extends Controller {

    public function index(Request $request) {




        $startDate = Carbon::createFromFormat('d/m/Y', '10/10/2010');

        $endDate = Carbon::createFromFormat('d/m/Y', '10/10/2020');

        $days = $startDate->diffInDays($endDate);

        $sortedDays = [];
        for ($i = 0; $i <= $days; $i++) {
            $sortedDays[$startDate->year][] = $startDate->toDateString();
            $startDate->addDay();
        }
        ksort($sortedDays);

        //dd($sortedDays);

        return view("diprev.ctc.index", ['sortedDays' => $sortedDays]);
    }

    public function create() {
        
        
        $origin = Origin::all();
        $servidor = Serve::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();

        //$atendimento_status = DB::table('atendimento_status')->get();
        //  $atendimento_assunto = DB::table('atendimento_assunto')->get();
        // $city = DB::table('city')->get();
        // $state = DB::table('state')->get();
        // $almo_localizacao_dpto = DB::table('almoxarifado_localizacao_dpto')->get()->all();

        return view('diprev.ctc.create', compact('servidor', 'orgao', 'funcao', 'origin'));
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

    public function retornaSexoDoBeneficiario(Request $request) {
        if ($request->ajax()) {
            $beneficiario = Beneficiario::with([
                        'pessoa',
                        'pessoa.pessoaFisica',
                    ])->findOrFail($request->query('beneficiarioId'));

            return response()->json($beneficiario->pessoa->pessoaFisica[0]->sexo);
        }
    }

}
