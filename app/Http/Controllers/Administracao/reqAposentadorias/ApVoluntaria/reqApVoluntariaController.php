<?php

namespace App\Http\Controllers\Administracao\reqAposentadorias\ApVoluntaria;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;









class reqApVoluntariaController extends Controller

{
    
    public function index(){
       

        return view("administracao.reqAposentadorias.reqVoluntaria.index");
    }
    
    
    public function create(){
       

        return view("administracao.reqAposentadorias.reqVoluntaria.create");
    }
    
    
    public function store(){
       

        return view("administracao.reqAposentadorias.reqVoluntaria.store");
    }
    
    
}
