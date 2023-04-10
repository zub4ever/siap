<?php

namespace App\Http\Controllers\DIPREV\Aposentadorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Serve;
use App\Funcao;
use App\User;
use App\Models\DIPREV\Aposentadorias\Aposentadorias;
use App\Models\DIPREV\Aposentadorias\RegrasdeAposentadoria;
use App\Models\DIPREV\Aposentadorias\TipodeAposentadorias;
use Illuminate\Support\Facades\DB;
use PDF;

class AposentadoriasController extends Controller {

  

    public function index() {

        

        return view("diprev.aposentadorias.index");
    }

    public function create() {
        
        $servidor = Serve::all();        
        $funcao = Funcao::all();
        $regra = RegrasdeAposentadoria::all();
        $tipo_aposentadoria = TipodeAposentadorias::all();
        
        return view('diprev.aposentadorias.create', compact('servidor', 'funcao', 'regra', 'tipo_aposentadoria'));
    }

    /*public function edit($id) {
        $ctc = CTC::findOrFail($id);

        $origin = Origin::all();
        $servidor = Serve::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();
        $tipo_certidao = TipoCertidao::all();
        $adress = Address::all();

        return view('diprev.ctc.edit', compact('ctc', 'servidor', 'orgao', 'funcao', 'origin', 'tipo_certidao', 'adress'));
    }*/

    /*public function update(CTCFormRequest $request, $id) {
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
    } */

    public function store(Request $request) {

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
