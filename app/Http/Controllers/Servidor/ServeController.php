<?php

namespace App\Http\Controllers\Servidor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Funcao;
use App\Orgao;
use App\Origin;
use App\Serve;


class ServeController extends Controller {

    //
    public function index() {
        
        
         $servidor = DB::table('serve')->get()->all();
         $origin = DB::table('origin')->get()->all();
        return view('servidor.index',compact('servidor','origin'));
    }

    public function create() {
        $origin = Origin::all();
        ///$sexo = Sexo::all();
        //$orgao_expedidor = Orgao_Expedidor::all();
        //$obito = Obito::all();
        //$type_serve = Type_Serve::all();
      //  $marital_status = Marital_Status::all();
        
        return view('servidor.create', compact('origin'));
    }

    public function store(ServeFormRequest $request) {
        
        DB::beginTransaction();

        $serve = Serve::create($request->all());

        if (!$serve) {
            DB::rollBack();
            return redirect()->route('servidor.index')->with('error', "Falha ao cadastrar uma lotação.");
        }
        $serve->save();
        DB::commit();

        return redirect()->route('servidor.index')->with(
                        'success',
                        "Lotação cadastrada com sucesso."
        );
      }

}
