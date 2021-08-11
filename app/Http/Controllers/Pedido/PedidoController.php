<?php

namespace App\Http\Controllers\Pedido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;









class PedidoController extends Controller

{
    
    public function index() {
       

        return view("pedido.index");
    }
}
