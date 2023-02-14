<?php

namespace App\Http\Controllers\FolhaPagamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FolhaPagamento\FolhaPagamento;
use App\Http\Requests\FolhaPagamentoFormRequest\FolhaPagamentoFormRequest;
use DB;

class FolhaPagamentoController extends Controller {

  

    public function index() {

        $folhapgto = FolhaPagamento::all();

        return view('folhaPagamento.folhamensal.index',compact('folhapgto'));
    }

    public function create() {


        return view('folhaPagamento.folhamensal.create');
    }

    public function store(FolhaPagamentoFormRequest $request) {

        DB::beginTransaction();

        $folhapgto = FolhaPagamento::create($request->all());

        $request->validate([
            'valorAposFprev' => 'required|numeric|max:100000000',
            'valorAposFfin' => 'required|numeric|max:100000000',
        ]);

        if (!$folhapgto) {
            DB::rollBack();
            return redirect()->route('folhaPagamento.index')->with('error', "Falha ao cadastrar o folha mensal.");
        }

        DB::commit();

        return redirect()->route('folhamensal.index')->with(
                        'success',
                        "Folha mensal cadastrada com sucesso."
        );
    }
    public function edit($id) {        
        $folhapgto = FolhaPagamento::findOrFail($id);
        return view('folhaPagamento.folhamensal.edit', compact('folhapgto'));
    }
    
    public function update(FolhaPagamentoFormRequest $request, $id) {
        $folhapgto = FolhaPagamento::findOrFail($id);

        DB::beginTransaction();

        if (!$folhapgto->update($request->all())) {

            DB::rollBack();
            return redirect()->route('folhamensal.index')->with('error', "Falha em alterar.");
        }

        DB::commit();

        return redirect()->route('folhamensal.index')->with(
                        'success',
                        "Alterada com sucesso."
        );
    }

}
