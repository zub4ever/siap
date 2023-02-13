<?php

namespace App\Http\Controllers\FolhaPagamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FolhaPagamento\FolhaPagamento;
use App\Http\Requests\FolhaPagamentoFormRequest\FolhaPagamentoFormRequest;
use DB;

class FolhaPagamentoController extends Controller {

    public function index() {


        return view("folhaPagamento.index");
    }

    public function inicioFolha() {


        return view('folhaPagamento.folhamensal.index');
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

        return redirect()->route('inicio.controle')->with(
                        'success',
                        "Folha mensal cadastrada com sucesso."
        );
    }

}
