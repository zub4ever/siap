<?php

namespace App\Http\Controllers\FolhaPagamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FolhaPagamento\FolhaPagamento;
use App\Http\Requests\FolhaPagamentoFormRequest\FolhaPagamentoFormRequest;
use DB;


class FolhaInicioController extends Controller {

    public function index() {


        return view("folhaPagamento.index");
    }
    
}