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
use App\Contract;
use App\Models\DIPREV\CTC\CTC;
use App\Models\DIPREV\CTC\TipoCertidao;
use App\Http\Requests\DiprevFormRequest\CTC\CTCFormRequest;
use Illuminate\Support\Facades\DB;
use PDF;

class CTCController extends Controller {

    public function pdf($id) {
        // Coletando as datas a partir do ID
        $start_date = DB::table('ctc_certidao')->where('id', $id)->value('start_date');
        $end_date = DB::table('ctc_certidao')->where('id', $id)->value('end_date');

        // Convertendo as datas para o objeto Carbon
        $start_date = Carbon::parse($start_date);
        $end_date = Carbon::parse($end_date);

        // Calculando a diferença entre as datas
        $diff = $start_date->diffInDays($end_date);
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
        }
        
        $ctc = CTC::findOrFail($id);
        
        $servidor = Serve::all();
        $sexo = Sexo::all();
        $funcao = Funcao::all();
        $orgao = Orgao::all();
        
        

        return \PDF::loadView('diprev.ctc.pdf.pdf', [
                            'diff' => $diff,
                            'days_by_year' => $days_by_year,
                            'ctc'=>$ctc,
                            'servidor'=>$servidor,
                            'sexo'=>$sexo,
                            'funcao'=>$funcao,
                            'orgao'=>$orgao
            
            ])
                        ->setPaper('A4', 'portrait')
                        ->stream();
    }

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
        $tipo_certidao = TipoCertidao::all();

        //$atendimento_status = DB::table('atendimento_status')->get();
        //  $atendimento_assunto = DB::table('atendimento_assunto')->get();
        // $city = DB::table('city')->get();
        // $state = DB::table('state')->get();
        // $almo_localizacao_dpto = DB::table('almoxarifado_localizacao_dpto')->get()->all();

        return view('diprev.ctc.create', compact('servidor', 'orgao', 'funcao', 'origin', 'tipo_certidao'));
    }

    public function store(CTCFormRequest $request) {



        DB::beginTransaction();
        //$denuncias->status_id ='1';
        // $request->request->add(['id_status_liberacao_projeto' => 1]);
        //$request->request->add(['atendimento_status_id' => 1]);       
        $ctc = CTC::create($request->all());

        $matricula = $request->input('serve_id');

        if (!empty($matricula)) {

            /* $var = DB::table('ctc_certidao as c')
              ->join('serve as sts', 'c.serve_id', '=', 'sts.id')
              ->select('sts.matricula')
              ->where('c.serve_id', '=', $matricula)
              ->get('c.matricula'); */



            //dd($var1);

            $var1 = $matricula;
            $current_date = date('dmY');
            $random_number = rand(1000, 9999);
            $ctc_numero_bruto = $var1 . '.' . $current_date . '.' . $random_number;
            $ctc_numero = $ctc_numero_bruto;
            $request->request->add(['ctc_numero' => $ctc_numero]);
            $ctc->ctc_numero = $ctc_numero;
            $ctc->save();
        }





        if (!$ctc) {
            DB::rollBack();
            return redirect()->route('ctc.index')->with('error', "Falha ao cadastrar Certidao.");
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

}
