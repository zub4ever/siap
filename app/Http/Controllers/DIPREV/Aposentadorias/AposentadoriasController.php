<?php

namespace App\Http\Controllers\DIPREV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Serve;
use App\Origin;
use App\Funcao;
use App\Orgao;
use App\Sexo;
use App\Address;
use App\Models\DIPREV\CTC\CTC;
use App\Models\DIPREV\CTC\TipoCertidao;
use App\Http\Requests\DiprevFormRequest\CTC\CTCFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\DIPREV\CTC\CTCDeducao;
use PDF;

class CTCController extends Controller {

    public function show($id, Request $request) {

        // Busca o ctc_certidao correspondente ao id
        $ctc_certidao = CTC::findOrFail($id);

        // Busca os anos cadastrados que contêm o id do ctc_certidao
        $registros = DB::table('ctc_certidao_deducao')
                ->join('ctc_certidao', 'ctc_certidao_deducao.ctc_certidao_id', '=', 'ctc_certidao.id')
                ->select('ctc_certidao_deducao.id', 'ctc_certidao_deducao.ano', 'ctc_certidao_deducao.tempo_bruto', 'ctc_certidao_deducao.faltas', 'ctc_certidao_deducao.licencas', 'ctc_certidao_deducao.licencas_sem_vencimento', 'ctc_certidao_deducao.suspensoes', 'ctc_certidao_deducao.disponibilidade', 'ctc_certidao_deducao.outras', 'ctc_certidao_deducao.tempo_liquido')
                ->where('ctc_certidao.id', '=', $id)
                ->orderBy('ctc_certidao_deducao.ano', 'desc')
                ->get();

        return view("diprev.ctc.show", compact('ctc_certidao', 'registros'));
    }

    public function index() {

        $ctc = CTC::where('status', 1)
                ->orderBY('id', 'asc')
                ->get();

        $serve = DB::table('serve')->get()->all();

        $orgao = Orgao::all();
        $funcao = Funcao::all();

        return view("diprev.ctc.index", compact('ctc', 'serve', 'funcao', 'orgao'));
    }

    public function create() {
        $origin = Origin::all();
        $servidor = Serve::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();
        $tipo_certidao = TipoCertidao::all();
        $adress = Address::all();
        //$atendimento_status = DB::table('atendimento_status')->get();
        //  $atendimento_assunto = DB::table('atendimento_assunto')->get();
        // $city = DB::table('city')->get();
        // $state = DB::table('state')->get();
        // $almo_localizacao_dpto = DB::table('almoxarifado_localizacao_dpto')->get()->all();
        return view('diprev.ctc.create', compact('servidor', 'orgao', 'funcao', 'origin', 'tipo_certidao', 'adress'));
    }

    public function edit($id) {
        $ctc = CTC::findOrFail($id);

        $origin = Origin::all();
        $servidor = Serve::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();
        $tipo_certidao = TipoCertidao::all();
        $adress = Address::all();

        return view('diprev.ctc.edit', compact('ctc', 'servidor', 'orgao', 'funcao', 'origin', 'tipo_certidao', 'adress'));
    }

    public function update(CTCFormRequest $request, $id) {
        $ctc = CTC::findOrFail($id);

        DB::beginTransaction();

        if (!$ctc->update($request->all())) {

            DB::rollBack();
            return redirect()->route('ctc.index')->with('error', "Falha em alterar o atendimento.");
        }

        DB::commit();

        return redirect()->route('ctc.index')->with(
                        'success',
                        "Certidao alterada com sucesso."
        );
    }

    public function store(CTCFormRequest $request) {

        DB::beginTransaction();
        $ctc = CTC::create($request->all());

        $matricula = $request->input('serve_id');

        if (!empty($matricula)) {
            // busca o endereço com base no serve_id
            $address = Address::where('serve_id', $matricula)->first();

            $var1 = $matricula;
            $current_date = date('dmY');
            $random_number = rand(1000, 9999);
            $ctc_numero_bruto = $var1 . '.' . $current_date . '.' . $random_number;
            $ctc_numero = $ctc_numero_bruto;
            $request->request->add(['ctc_numero' => $ctc_numero]);
            $ctc->ctc_numero = $ctc_numero;

            $ctc->address_id = $address->id; // insere o id do endereço correspondente

            DB::table('ctc_verso')->insert([
                'ctc_certidao_id' => $ctc->id
            ]);

            $ctc->save();
        }


        if (!$ctc) {
            DB::rollBack();
            return redirect()->route('ctc.index')->with('error', "Falha ao cadastrar Certidao.");
        }


        $start_date = Carbon::createFromFormat('d/m/Y', $request->input('start_date'));
        $end_date = Carbon::createFromFormat('d/m/Y', $request->input('end_date'));

        $days_by_year = [];

        // Contando a diferença de dias por ano
        for ($i = $start_date->year; $i <= $end_date->year; $i++) {
            $year_start = Carbon::createFromDate($i, 1, 1);
            $year_end = Carbon::createFromDate($i, 12, 31);

            if ($i == $start_date->year && $i == $end_date->year) {
                $days_by_year[$i] = $start_date->diffInDays($end_date);
            } elseif ($i == $start_date->year) {
                $days_by_year[$i] = $start_date->diffInDays($year_end);
            } elseif ($i == $end_date->year) {
                $days_by_year[$i] = $year_start->diffInDays($end_date);
            } else {
                $days_by_year[$i] = $year_start->diffInDays($year_end);
            }



            //Inserindo na tabela
            DB::table('ctc_certidao_deducao')->insert([
                'ctc_certidao_id' => $ctc->id,
                'ano' => $i,
                'tempo_bruto' => $days_by_year[$i],
                'faltas' => 0,
                'licencas' => 0,
                'licencas_sem_vencimento' => 0,
                'suspensoes' => 0,
                'disponibilidade' => 0,
                'outras' => 0,
                'tempo_liquido' => $days_by_year[$i]
            ]);
        }






        DB::commit();
        $insertedId = $ctc->id;
        return redirect()->route('ctc.index')->with(
                        'success',
                        "Certidao de n " . $insertedId . " cadastrado com sucesso."
        );
    }

    //Controller
    //Controller
    public function getDetails(Request $request) {
        //Validate the request 
        $validator = Validator::make($request->all(), [
                    'id' => 'required|integer|exists:serve,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        //Find the user by id
        $user = Serve::find($request->id);

        //Check if user exists
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        //Return the response in json format
        return response()->json([
                    'data_nascimento' => $user->data_nascimento,
                    'cpf' => $user->cpf
        ]);
    }

    public function pdf($id) {



        $ctc = CTC::findOrFail($id);

        $ctc_deducao = CTCDeducao::where('ctc_certidao_id', $id)->get();
        $ctc_verso = \App\Models\DIPREV\CTC\CTCVerso::where('ctc_certidao_id', $id)->get();

        $servidor = Serve::all();
        $sexo = Sexo::all();
        $funcao = Funcao::all();
        $orgao = Orgao::all();
        $address = Address::all();

        return \PDF::loadView('diprev.ctc.pdf.pdf', [
                            'ctc' => $ctc,
                            'servidor' => $servidor,
                            'sexo' => $sexo,
                            'funcao' => $funcao,
                            'orgao' => $orgao,
                            'ctc_deducao' => $ctc_deducao,
                            'address' => $address,
                            'ctc_verso' => $ctc_verso
                        ])
                        ->setPaper('A4', 'portrait')
                        ->stream('ctc_certidao.pdf');
                        
    }

    public function destroy($id) {

        $ctc = CTC::findOrFail($id);

        DB::beginTransaction();

        if (!$ctc->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('ctc.index')->with('error', "Falha ao deletar CTC.");
        }

        DB::commit();

        return redirect()->route('ctc.index')->with(
                        'success',
                        "CTC deletado com sucesso."
        );
    }

}
