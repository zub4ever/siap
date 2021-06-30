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
            return redirect()->route('origem.index')->with('error', "Falha ao cadastrar uma lotação.");
        }

        DB::commit();

        return redirect()->route('origem.index')->with(
                        'success',
                        "Lotação cadastrada com sucesso."
        );
      }  
       
        
        
    }

