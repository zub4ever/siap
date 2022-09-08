<?php

namespace App\Http\Controllers\DAF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest\AlmoFormRequest;
use App\Models\DAF\Almoxarifado\Almo;
use App\Models\DAF\Almoxarifado\AlmoCedido;
use App\Models\DAF\Almoxarifado\AlmoCondicao;
use App\Models\DAF\Almoxarifado\AlmoContrato;
use App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO;
use App\Models\DAF\Almoxarifado\AlmoMarca;
use App\Models\DAF\Almoxarifado\AlmoResponsavel;
use App\Models\DAF\Almoxarifado\AlmoTipo;
use Illuminate\Support\Facades\DB;




class FiltroAlmoxarifadoController extends Controller
{

    public function index(Request $request)
    {


        $query  =  Almo::with('almoxarifado_tipo','almoxarifado_condicao','almoxarifado_localizacao_dpto')->where('status',1);






        $iguais = $request->only(
            'almoxarifado_tipo_id',
            'almoxarifado_condicao_id',
            'almoxarifado_localizacao_dpto_id'

        );
        foreach ($iguais as $nome => $valor) {
            if ($valor) {
                $query->where($nome, '=', $valor);
            }
        }



        $semelhante = $request->only(
            'nm_patrimonio'
        );
        foreach ($semelhante as $nome => $valor) {
            if ($valor) {
                $query->where($nome, 'LIKE', '%' . $valor . '%');
            }
        }

        $almoxarifado = $query->orderBy('id', 'asc')->paginate(10);
        //dd($almoxarifado);


        $almo_condicao = AlmoCondicao::where('status', 1)->get();
        $almo_tipo = AlmoTipo::where('status', 1)->get();
        $almo_localizacao_dpto = AlmoLocalizacaoDPTO::where('status', 1)->get();
        $almo_contrato = AlmoContrato::where('status', 1)->get();



        return view('daf.almoxarifado.resultadoBusca',
        compact(
            'almoxarifado',
            'almo_condicao',
            'almo_tipo',
            'almo_localizacao_dpto',
            'almo_contrato',
            'request'
        )


    );
    }

}
