<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Obito;
use App\Orgao;
use App\Origin;
use App\Serve;
use App\Http\Resources\Servidor;
use App\Marital_Status;
use App\Type_Serve;
use App\Orgao_Expedidor;
use App\Sexo;
use App\TipoServidor;
//use App\Funcao;

class ServeAPIController extends Controller {

    public function show($id){

        $serve = Serve::findOrFail($id);
        $origin = Origin::all();
        $sexo = Sexo::all();
        $orgao_expedidor = Orgao_Expedidor::all();
        $obito = Obito::all();
        $type_serve = Type_Serve::all();
        $marital_status = Marital_Status::all();
        $tpservidor = TipoServidor::all();
        return view('servidor.show', compact('serve','origin', 'marital_status', 'sexo', 'orgao_expedidor', 'obito', 'type_serve', 'tpservidor'));
    }

    public function index() {

        $servidor = Serve::all();
        
       return response()->json(['servidor'=>$servidor], 200);
    }

    
   
}
