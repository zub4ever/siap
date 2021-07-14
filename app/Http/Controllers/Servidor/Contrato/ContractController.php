<?php

namespace App\Http\Controllers\Servidor\Contrato;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
//use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;


        


class ContractController extends Controller {

    //
    public function index() {
        
        
         
        
        return view('servidor.contrato.index');
    }

    public function create() {
  
        
        return view('servidor.contrato.create');
    }

    public function store(ServeFormRequest $request) {
        
        DB::beginTransaction();

        $serve = Serve::create($request->all());

        if (!$serve) {
            DB::rollBack();
            return redirect()->route('servidor.contrato.index')->with('error', "Falha ao cadastrar uma lotação.");
        }
        $serve->save();
        DB::commit();

        return redirect()->route('servidor.contrato.index')->with(
                        'success',
                        "Lotação cadastrada com sucesso."
        );
      }

}
