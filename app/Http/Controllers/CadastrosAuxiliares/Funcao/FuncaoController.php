<?php

namespace App\Http\Controllers\CadastrosAuxiliares\Funcao;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuncaoFormRequest;
use Illuminate\Support\Facades\DB;
use App\Funcao;
use App\Orgao;

class FuncaoController extends Controller
{
    public function index() {
           
     
        
            
           $orgaomnc = DB::table('orgao')->get()->all(); 
           $funcao = DB::table('funcao')->get()->all();
            //
            return view('cadastrosAuxiliares.funcao.index', compact('funcao','orgaomnc'));
        }

      public function create() {
           $orgaoMun = Orgao::all();
            return view('cadastrosAuxiliares.funcao.create',compact('orgaoMun'));
        }
        
      public function store(FuncaoFormRequest $request) {
        
        DB::beginTransaction();

        $funcao = Funcao::create($request->all());

        if (!$funcao) {
            DB::rollBack();
            return redirect()->route('funcao.index')->with('error', "Falha ao cadastrar uma Função.");
        }

        DB::commit();

        return redirect()->route('funcao.index')->with(
                        'success',
                        "Função cadastrada com sucesso."
        );
      }  
      public function edit($id){

        $funcao = Funcao::findOrFail($id);

        $orgaoMun = Orgao::get();
        
        return view('cadastrosAuxiliares.funcao.edit',compact('funcao','orgaoMun'));
      }   
      
      public function update(FuncaoFormRequest $request, $id) {
       
          $funcao = Funcao::findOrFail($id);

       
          DB::beginTransaction();
  
          if (!$funcao->update($request->all())) {

              DB::rollBack();
              return redirect()->route('funcao.index')->with('error', "Falha na alteração função.");
          }
  
          DB::commit();
  
          return redirect()->route('funcao.index')->with(
              'success',
              "Função alterado com sucesso."
          );
      }         
        
        
    }

