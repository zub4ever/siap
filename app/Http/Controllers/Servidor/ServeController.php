<?php

namespace App\Http\Controllers\Servidor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Marital_Status;
use App\Obito;
use App\Orgao_Expedidor;
use App\Origin;
use App\Serve;
use App\Sexo;
use App\Type_Serve;

class ServeController extends Controller {

    //
    public function index() {
        return view('servidor.index');
    }

    public function create() {
        $origin = Origin::all();
        $sexo = Sexo::all();
        $orgao_expedidor = Orgao_Expedidor::all();
        $obito = Obito::all();
        $type_serve = Type_Serve::all();
        $marital_status = Marital_Status::all();
        
        return view('servidor.create', compact('origin',
                                                 'sexo', 
                                               'orgao_expedidor', 
                                                  'obito', 
                                                'type_serve',
                                                 'marital_status'));
    }

    public function store(ServeFormRequest $request) {
        
        DB::beginTransaction();
        //$funcao = Funcao::create($request->all());
        $serve = Serve::create($request->all());
        
     
        
        if (!$serve) {
            DB::rollBack();
            return redirect()->route('servidor.index')->with('error', "Falha ao cadastrar uma lotação.");
        }
        DB::commit();
        return redirect()->route('servidor.index')->with(
                        'success',
                        "Lotação cadastrada com sucesso."
        );
    }

}
