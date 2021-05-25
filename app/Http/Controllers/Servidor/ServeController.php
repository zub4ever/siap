<?php

namespace App\Http\Controllers\Servidor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Orgao_Expedidor;
use App\Origin;
use App\Sexo;
use App\Type_Serve;
use App\Obito;
use App\Marital_Status;

class ServeController extends Controller {

    //
    public function index() {
        return view('servidor.index');
    }

    public function show() {
        return view('servidor.index');
    }

    public function create() {
            $origin = Origin::all();
            $sexo = Sexo::all();
            $orgao_expedidor = Orgao_Expedidor::all();
            $obito = Obito::all();
            $type_serve = Type_Serve::all();
            $marital_status = Marital_Status::all();
        return view('servidor.create',compact('origin',
                'sexo','orgao_expedidor','obito','type_serve','marital_status'));
    }

    public function store(ServeFormRequest $request) {
        
        DB::beginTransaction();
        
         $serve = Serve::create($request->all());
        
         if (!$serve) {
            DB::rollBack();
            return redirect()->route('servidor.index')->with('error', "Falha ao cadastrar o Servidor.");
        }
        
        return view('servidor.create');
    }

}
