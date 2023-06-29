<?php

namespace App\Http\Controllers\FolhaPagamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FolhaPagamento\FolhaPagamento;
use App\Http\Requests\FolhaPagamentoFormRequest\FolhaPagamentoFormRequest;
use DB;

class FolhaPagamentoController extends Controller
{


    public function index()
    {

        $folhapgto = FolhaPagamento::all();

        return view('folhaPagamento.folhamensal.index', compact('folhapgto'));
    }

    public function create()
    {


        return view('folhaPagamento.folhamensal.create');
    }

    public function store(Request $request) {

        $folhapgto = FolhaPagamento::create($request->all());

        // Somando valores de aposentados e pensionistas para qtdTotalFprev
        $qtdAposentadoFprev = $request->input('qtdAposentadoFprev');
        $qtdPensionistaFprev = $request->input('qtdPensionistaFprev');
        $qtdTotalFprev = $qtdAposentadoFprev + $qtdPensionistaFprev;
        $folhapgto->qtdTotalFprev = $qtdTotalFprev;

        $qtdAposentadoFffin = $request->input('qtdAposentadoFffin');
        $qtdPensionistaFfin = $request->input('qtdPensionistaFfin');
        $qtdTotalFfin = $qtdAposentadoFffin + $qtdPensionistaFfin;
        $folhapgto->qtdTotalFfin = $qtdTotalFfin;

        // Somando valores de aposentados e pensionistas para valorTotalFprev
        $valorAposFprev = $request->input('valorAposFprev');
        $valorPenFprev = $request->input('valorPenFprev');
        $valorTotalFprev = $valorAposFprev + $valorPenFprev;
        $folhapgto->valorTotalFprev = $valorTotalFprev;

        // Somando valores de aposentados e pensionistas para valorTotalFfin
        $valorAposFfin = $request->input('valorAposFfin');
        $valorPenFfin = $request->input('valorPenFfin');
        $valorTotalFfin = $valorAposFfin + $valorPenFfin;
        $folhapgto->valorTotalFfin = $valorTotalFfin;


        DB::beginTransaction();
        //dd($folhapgto); // Adição do dd() para verificar o conteúdo antes de salvar
        $folhapgto->save();
       DB::commit();

        return redirect()->route('folhamensal.index')->with(
            'success',
            "Folha mensal cadastrada com sucesso."
        );
    }





    public function edit($id)
    {
        $folhapgto = FolhaPagamento::findOrFail($id);
        return view('folhaPagamento.folhamensal.edit', compact('folhapgto'));
    }

    public function update(FolhaPagamentoFormRequest $request, $id)
    {
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
