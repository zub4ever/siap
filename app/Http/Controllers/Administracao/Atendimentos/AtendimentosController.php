<?php

namespace App\Http\Controllers\Administracao\Atendimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\AtendimentoFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Atendimento;
use PDF;
use Carbon\Carbon;

class AtendimentosController extends Controller {
    

    public function index() {
        $atendimentos = DB::table('atendimento')->get()->all();
        return view("administracao.atendimentos.index", compact('atendimentos'));
    }

    public function create() {

        return view('administracao.atendimentos.create');
    }

    public function store(AtendimentoFormRequest $request) {

        DB::beginTransaction();

        $atendimentos = Atendimento::create($request->all());

        if (!$atendimentos) {
            DB::rollBack();
            return redirect()->route('atendimentos.index')->with('error', "Falha ao cadastrar um Atendimento.");
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

    public function Verpdf($id){
       $atendimentos = Atendimento::findOrFail($id);
        return \PDF::loadView('administracao.atendimentos.pdf.Verpdf',           
                                compact('atendimentos')
                )
                        ->setPaper('A4', 'portrait')
                        ->stream();
      
    }

}
