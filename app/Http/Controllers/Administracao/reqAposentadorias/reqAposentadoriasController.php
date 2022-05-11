<?php

namespace App\Http\Controllers\Administracao\reqAposentadorias;

use App\Http\Controllers\Controller;
use App\Http\Requests\AtendimentoFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;









class reqAposentadoriasController extends Controller

{
    
    public function index(){
       

        return view("administracao.reqAposentadorias.index");
    }
    
    
    
    
}
