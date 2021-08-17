<?php

namespace App\Http\Controllers\CadastrosAuxiliares\Origin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\OriginFormRequest;
use Illuminate\Support\Facades\DB;
use App\Origin;
use App\Serve;

class OriginController extends Controller
{
    public function index() {
           
     
        
            
            
           $origin = DB::table('origin')->get()->all();
            
            return view('cadastrosAuxiliares.origem.index', compact('origin'));
        }

      public function create() {
       
            return view('cadastrosAuxiliares.origem.create');
        }
        
      public function store(OriginFormRequest $request) {
          DB::beginTransaction();

        $origin = Origin::create($request->all());

        if (!$origin) {
            DB::rollBack();
            return redirect()->route('origem.index')->with('error', "Falha ao cadastrar uma Origem.");
        }

        DB::commit();

        return redirect()->route('origem.index')->with(
                        'success',
                        "Origem cadastrada com sucesso."
        );
      }  
       
      public function edit($id){

        $origin = Origin::findOrFail($id);

        return view("cadastrosAuxiliares.origem.edit", compact('origin'));
      }   
      public function update(OriginFormRequest $request, $id)
      {
          $origin = Origin::findOrFail($id);
  
          DB::beginTransaction();
  
          if (!$origin->update($request->all())) {
              DB::rollBack();
              return redirect()->route('origem.index')->with('error', "Falha na alteração da Origem.");
          }
  
          DB::commit();
  
          return redirect()->route('origem.index')->with(
              'success',
              "Origem alterado com sucesso."
          );
      } 


    }

