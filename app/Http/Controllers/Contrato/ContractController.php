<?php

namespace App\Http\Controllers\Contrato;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
//use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;


        


class ContractController extends Controller {

    //
    public function index() {
        
        
         
        
        return view('contrato.index');
    }

    public function create() {
  
        
        return view('contrato.create');
    }

    public function store(ServeFormRequest $request) {
        
        DB::beginTransaction();

        $serve = Serve::create($request->all());

        if (!$serve) {
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
