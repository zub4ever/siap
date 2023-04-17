<?php

namespace App\Http\Controllers\APIs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class AposentadoriasAPIController extends Controller{
    
    public function index() {
        
        $aposentadorias = DB::table('aposentadorias_concedidas')
                ->join('serve', 'aposentadorias_concedidas.serve_id', '=', 'serve.id')
                ->join('funcao', 'aposentadorias_concedidas.funcao_id', '=', 'funcao.id')
                ->join('users', 'aposentadorias_concedidas.users_id', '=', 'users.id')
                ->join('regras_aposentadoria', 'aposentadorias_concedidas.regras_aposentadoria_id', '=', 'regras_aposentadoria.id')
                ->join('tipo_de_aposentadoria', 'aposentadorias_concedidas.tipo_de_aposentadoria_id', '=', 'tipo_de_aposentadoria.id')
                ->select('aposentadorias_concedidas.id', 'aposentadorias_concedidas.nr_processo',
                        'aposentadorias_concedidas.nr_protocolo',
                        'aposentadorias_concedidas.nr_portaria',
                        'aposentadorias_concedidas.nr_diario',
                        'aposentadorias_concedidas.data_aposentadoria',
                        'aposentadorias_concedidas.data_diario_oficial',
                        'serve.nm_servidor',
                        'serve.matricula',
                        'users.name',
                        'funcao.nm_funcao',
                        'regras_aposentadoria.nm_regra',
                        'tipo_de_aposentadoria.nm_aposentadoria')
                ->get();
        
        
        return response()->json($aposentadorias);
        
    }
    
    
}