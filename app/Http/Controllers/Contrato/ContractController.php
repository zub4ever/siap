<?php

namespace App\Http\Controllers\Contrato;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Serve;
use App\Origin;
use App\Funcao;
use App\Orgao;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller {

    //


    public function index() {

        $servidor = DB::table('serve')->get()->all();
        $origin = DB::table('origin')->get()->all();
        $orgao = DB::table('orgao')->get()->all();
        $funcao = DB::table('funcao')->get()->all();
        return view('contrato.index', compact('servidor', 'origin', 'funcao', 'orgao'));
    }

    public function create() {
        
        $origin = Origin::all();
        $servidor = Serve::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();

        return view('contrato.create', compact('servidor','orgao','funcao','origin'));
        
    }

    public function store(ContractFormRequest $request) {

        DB::beginTransaction();

        $contrato = Contract::create($request->all());

        if (!$contrato) {
            DB::rollBack();
            return redirect()->route('contrato.index')->with('error', "Falha ao cadastrar uma lotação.");
        }
        $serve->save();
        DB::commit();

        return redirect()->route('contrato.index')->with(
                        'success',
                        "Lotação cadastrada com sucesso."
        );
    }

}
