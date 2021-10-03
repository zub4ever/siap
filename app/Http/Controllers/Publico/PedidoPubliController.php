<?php

namespace App\Http\Controllers\Publico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;









class PedidoPubliController extends Controller

{
    
    public function index() {
       

        return view("requerimentos.index");
    }
    public function apVoluntaria() {
       

        return view("requerimentos.aposentadorias.apVoluntaria");
    }
}
