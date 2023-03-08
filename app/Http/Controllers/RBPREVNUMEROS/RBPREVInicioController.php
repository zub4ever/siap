<?php

namespace App\Http\Controllers\RBPREVNUMEROS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RBPREVInicioController extends Controller
{
  public function index() {


        return view("rbprevAtualizacoes.index");
    }
}
