<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Obito;
use App\Orgao;
use App\Origin;
use App\Models\DIPREV\CTC\CTC;

class CTCAPIController extends Controller {
    /*
      public function show($id) {

      $serve = Serve::findOrFail($id);
      $origin = Origin::all();
      $sexo = Sexo::all();
      $orgao_expedidor = Orgao_Expedidor::all();
      $obito = Obito::all();
      $type_serve = Type_Serve::all();
      $marital_status = Marital_Status::all();
      $tpservidor = TipoServidor::all();
      return view('servidor.show', compact('serve', 'origin', 'marital_status', 'sexo', 'orgao_expedidor', 'obito', 'type_serve', 'tpservidor'));
      } */

    public function index() {
        $ctc = DB::table('ctc_certidao')
                ->join('serve', 'ctc_certidao.serve_id', '=', 'serve.id')
                ->join('orgao', 'ctc_certidao.orgao_id', '=', 'orgao.id')
                ->where('ctc_certidao.identificacao_servidor', '=', 2)
                ->select('ctc_certidao.id', 'ctc_certidao.ctc_numero', 'serve.nm_servidor', 'orgao.nm_orgao', 'ctc_certidao.created_at')
                ->get();

        return response()->json(['ctc' => $ctc], 200);
    }

}
