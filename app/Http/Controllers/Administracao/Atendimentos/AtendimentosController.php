<?php


namespace App\Http\Controllers\Administracao\Atendimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\AtendimentoFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Atendimento;

class AtendimentosController extends Controller {
    //put your code here
    
    
    public function index() {
        $atendimentos = DB::table('atendimento')->get()->all();
        
       return view("administracao.atendimentos.index", compact('atendimentos')); 
    }
}
