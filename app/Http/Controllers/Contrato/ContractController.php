<?php

namespace App\Http\Controllers\Contrato;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContractFormRequest;
use App\Serve;
use App\Origin;
use App\Funcao;
use App\Orgao;
use App\Contract;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller {

    //


    public function index() {
        $contrato = DB::table('contract')->get()->all();
        $servidor = DB::table('serve')->get()->all();
        $origin = DB::table('origin')->get()->all();
        $orgao = DB::table('orgao')->get()->all();
        $funcao = DB::table('funcao')->get()->all();
        return view('contratos.index', compact('servidor', 'origin', 'funcao', 'orgao', 'contrato'));
    }

    public function create() {

        $origin = Origin::all();
        $servidor = Serve::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();

        return view('contratos.create', compact('servidor', 'orgao', 'funcao', 'origin'));
    }

    public function store(ContractFormRequest $request) {

        DB::beginTransaction();

        $contrato = Contract::create($request->all());

        if (!$contrato) {
            DB::rollBack();
            return redirect()->route('contratos.index')->with('error', "Falha ao cadastrar um Contrato.");
        }
        $contrato->save();
        DB::commit();

        return redirect()->route('contratos.index')->with(
                        'success',
                        "Contrato cadastrada com sucesso."
        );
    }

    public function edit($id) {

        $contrato = Contract::findOrFail($id);
         $origin = Origin::all();
         $servidor = Serve::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();
        return view('contratos.edit', compact('contrato','servidor', 'orgao', 'funcao', 'origin'));
    }

    public function update(ContractFormRequest $request, $id) {

        $contrato = Contract::findOrFail($id);

        DB::beginTransaction();

        if (!$contrato->update($request->all())) {

            DB::rollBack();
            return redirect()->route('contratos.index')->with('error', "Falha na alteração contrato.");
        }

        DB::commit();

        return redirect()->route('contratos.index')->with(
                        'success',
                        "Contrato alterado com sucesso."
        );
    }
        public function destroy($id)
    {
        
        $contrato = Contract::findOrFail($id);


        DB::beginTransaction();

        if (!$contrato->update(['status'=> 0])) {
            DB::rollBack();
            return redirect()->route('contratos.index')->with('error', "Falha ao deletar o Contrato.");
        }

        DB::commit();

        return redirect()->route('contratos.index')->with(
            'success',
            "Contrato deletado com sucesso."
        );
    }

}
