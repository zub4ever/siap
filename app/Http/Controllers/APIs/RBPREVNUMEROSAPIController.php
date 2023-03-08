<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROS;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROSANO;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROSMES;
use Illuminate\Support\Facades\Storage;


//use App\Funcao;

class RBPREVNUMEROSAPIController extends Controller {

    public function index() {
        $rbprevNumeros = DB::table('rbprev_numeros')
                ->join('rbprev_numeros_ano', 'rbprev_numeros.rbprev_numeros_ano_id', '=', 'rbprev_numeros_ano.id')
                ->join('rbprev_numeros_mes', 'rbprev_numeros.rbprev_numeros_mes_id', '=', 'rbprev_numeros_mes.id')
                ->select('rbprev_numeros.id', 'rbprev_numeros_ano.nm_ano', 'rbprev_numeros_mes.nm_mes', 'rbprev_numeros.path_pdf')
                ->get();

        // Adicione a URL base do seu sistema antes do caminho do arquivo
        $baseURL = config('app.url'). '/';
        
        foreach ($rbprevNumeros as $rbprevNumero) {
            $rbprevNumero->path_pdf = Storage::url($rbprevNumero->path_pdf);

        }

        return response()->json($rbprevNumeros);
    }

}
