<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use App\Http\Requests\AtendimentoFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Atendimento;








class PedidoPubliController extends Controller

{
    
    public function index(){
       

        return view("requerimentos.index");
    }
    
    public function create() {
        
        
        return view("requerimentos.create");
    }
    
    public function store(AtendimentoFormRequest $request) {
        
        DB::beginTransaction();

        $atendimento = Atendimento::create($request->all());

        if (!$atendimento) {
            DB::rollBack();
            return redirect()->route('requerimentos.index')->with('error', "Falha ao cadastrar um atendimento.");
        }

        $atendimento->save();

        DB::commit();

        return redirect()->route('requerimentos.index')->with(
                        'success',
                        "Atendimento cadastrado com sucesso."
        );
    }
    
    
}
