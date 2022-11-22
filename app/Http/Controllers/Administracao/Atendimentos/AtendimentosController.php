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


class AtendimentosController extends Controller {
    public function show($id) {
        
      $atendimentos = Atendimento::findOrFail($id);
        
        $atendimento_status = AtendimentoStatus::all();
        $city = City::all();
        $state = State::all();
        $atendimento_assunto = AtendimentoAssunto::all();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::all();
        
        return view('administracao.atendimentos.show', 
                compact('atendimentos','atendimento_status',
                        'atendimento_assunto','city','state',
                        'almo_localizacao_dpto'));
    }
    public function index() {
        
        $atendimentos = Atendimento::where('status',1 ) 
                ->Where('atendimento_status_id',1)
                ->orderBY('id', 'asc')
                ->get();
        $atendimento_assunto = DB::table('atendimento_assunto')->get();
        
        $atendimento_status = DB::table('atendimento_status')->get();
        
        
        return view("administracao.atendimentos.index", compact('atendimentos','atendimento_assunto','atendimento_status'));
    }

    public function create(){
        
       

        $atendimento_status = DB::table('atendimento_status')->get();
        $atendimento_assunto = DB::table('atendimento_assunto')->get();
        $city = DB::table('city')->get();
        $state = DB::table('state')->get();
        $almo_localizacao_dpto = DB::table('almoxarifado_localizacao_dpto')->get()->all();

        return view('administracao.atendimentos.create', compact('atendimento_status','atendimento_assunto','almo_localizacao_dpto','city','state' ));
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
        
        
        return view('administracao.atendimentos.edit', compact('atendimentos','atendimento_status','atendimento_assunto','city','state','almo_localizacao_dpto'));
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
                                compact('atendimentos','city','state','atendimento_assunto','almo_localizacao_dpto')
                        )
                        ->setPaper('A4', 'portrait')
                        ->stream();
    }

    public function destroy($id)
    {
        
        $atendimentos = Atendimento::findOrFail($id);


        DB::beginTransaction();

        if (!$atendimentos->update(['status'=> 0])) {
            DB::rollBack();
            return redirect()->route('atendimentos.index')->with('error', "Falha ao deletar o Atendimento.");
        }

        DB::commit();

        return redirect()->route('atendimentos.index')->with(
            'success',
            "Atendimento deletado com sucesso."
        );
    }

}
