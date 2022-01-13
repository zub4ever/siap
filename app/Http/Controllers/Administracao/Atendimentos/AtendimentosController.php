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


class AtendimentosController extends Controller {

    public function index() {
        
        $atendimentos = Atendimento::where('status',1 ) 
                ->where('atendimento_status_id',1)
                ->orderBY('id')
                ->get();
        
        
        
        return view("administracao.atendimentos.index", compact('atendimentos'));
    }

    public function create(){
        
        $permissao = Auth::user()->permissao->pluck('id');
        if (!in_array(3, $permissao->toArray()) && !in_array(4, $permissao->toArray())) {
            return redirect()->route('documentoTerra.index')->with('alert', "Você não tem permissão.");
        }

        $atendimento_status = DB::table('atendimento_status')->get();

        return view('administracao.atendimentos.create', 
        ['atendimento_status'=>$atendimento_status]);
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
        return view('administracao.atendimentos.edit', compact('atendimentos'));
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
        return \PDF::loadView('administracao.atendimentos.pdf.Verpdf',
                                compact('atendimentos')
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
