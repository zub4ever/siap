<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\FolhaPagamento\FolhaPagamento;

//use App\Funcao;

class FolhaPgtoAPIController extends Controller {

    

    public function index() {
        
       $folhasPagamento = FolhaPagamento::where('ano', 2023)->get();
        
    return response()->json($folhasPagamento);
    }

    
   
}
