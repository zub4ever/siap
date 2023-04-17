<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class ProcessosTCEAPIController extends Controller {

    public function index() {
        $processos = DB::table('tce_processos_homologados')
                ->join('funcao', 'tce_processos_homologados.funcao_id', '=', 'funcao.id')
                ->leftJoin('tce_tipo_aposentadoria', 'tce_processos_homologados.tipo_aposentadoria_id', '=', 'tce_tipo_aposentadoria.id')
                ->leftJoin('tce_tipo_pensao', 'tce_processos_homologados.tipo_pensao_id', '=', 'tce_tipo_pensao.id')
                ->join('tce_ano', 'tce_processos_homologados.tce_ano_id', '=', 'tce_ano.id')
                ->join('tce_mes', 'tce_processos_homologados.tce_mes_id', '=', 'tce_mes.id')
                ->join('users', 'tce_processos_homologados.users_id', '=', 'users.id')
                ->select('tce_processos_homologados.id', 'tce_processos_homologados.nr_acordao', 'tce_processos_homologados.nm_assegurado', 'tce_processos_homologados.data_notificacao', 'tce_processos_homologados.data_diario_eletronico', 'funcao.nm_funcao', DB::raw('COALESCE(tce_tipo_aposentadoria.nm_aposentadoria, \'\') as nm_aposentadoria'), DB::raw('COALESCE(tce_tipo_pensao.nm_pensao, \'\') as nm_pensao'), 'tce_ano.nm_ano', 'tce_mes.nm_mes', 'users.name')
                ->get();

        return response()->json($processos);
    }

}
