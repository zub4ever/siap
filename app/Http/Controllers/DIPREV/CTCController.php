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
use App\Models\DIPREV\CTC\CTC;
use App\Http\Requests\DiprevFormRequest\CTC\CTCFormRequest;
use Illuminate\Support\Facades\DB;

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

    public function store(CTCFormRequest $request) {



        DB::beginTransaction();
        //$denuncias->status_id ='1';
        // $request->request->add(['id_status_liberacao_projeto' => 1]);
        //$request->request->add(['atendimento_status_id' => 1]);       
        $ctc = CTC::create($request->all());

        $matricula = $request->input('serve_id');
        //$matricula = Serve::find($serve_id);

        if (!empty($matricula)) {

            /*$var = DB::table('ctc_certidao as c')
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
            
            //dd($ctc_numero);
            
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
                        "Certidao de n ".$insertedId." cadastrado com sucesso."
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
