<?php

namespace App\Http\Controllers\FolhaPagamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;









class FolhaPagamentoController extends Controller

{
    
    public function index() {
       

        return view("folhaPagamento.index");
    }
    
    
    public function inicioFolha() {
        
        
        return view('folhaPagamento.folhamensal.index');
    }
    public function create() {
        
        
        return view('folhaPagamento.folhamensal.create');
    }
    public function store() {
        
        
        return view('folhaPagamento.folhamensal.index');
    }
    
            
}
