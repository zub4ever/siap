<?php

namespace App\Http\Controllers\CadastrosAuxiliares\Orgao;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrgaoFormRequest;
use Illuminate\Support\Facades\DB;
use App\Orgao;

class OrgaoController extends Controller
{
    public function index() {
           
     
        
            
            
           $orgao = DB::table('orgao')->get()->all();
            //
            return view('cadastrosAuxiliares.orgao.index', compact('orgao'));
        }

      public function create() {
       
            return view('cadastrosAuxiliares.orgao.create');
        }
        
      public function store(OrgaoFormRequest $request) {
          DB::beginTransaction();

        $orgao = Orgao::create($request->all());

        if (!$orgao) {
            DB::rollBack();
            return redirect()->route('orgao.index')->with('error', "Falha ao cadastrar uma lotação.");
        }

        DB::commit();

        return redirect()->route('orgao.index')->with(
                        'success',
                        "Lotação cadastrada com sucesso."
        );
      }  
       
        
        
    }

