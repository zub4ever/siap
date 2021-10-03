<?php

namespace App\Http\Controllers\FolhaPagamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;









class FolhaPagamentoController extends Controller

{
    
    public function index() {
       

        return view("folhaPagamento.index");
    }
}
