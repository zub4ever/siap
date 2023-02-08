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
use Illuminate\Pagination\Paginator;
use PDF;

class FiltroAlmoxarifadoController extends Controller {

    public function index(Request $request) {

        //$query  =  Almo::with('almoxarifado_tipo','almoxarifado_condicao','almoxarifado_localizacao_dpto')->where('status',1);
        // $query = DB::table('almoxarifado')
        //$filters = $request->except('_token');
        //$query  =  Almo::with('almoxarifado_tipo','almoxarifado_condicao','almoxarifado_localizacao_dpto')->where('status',1);
        //$query = DB::table('almoxarifado')
        $query = Almo::join('almoxarifado_tipo', 'almoxarifado_tipo.id', '=', 'almoxarifado.almoxarifado_tipo_id')
                ->join('almoxarifado_condicao', 'almoxarifado_condicao.id', '=', 'almoxarifado.almoxarifado_condicao_id')
                ->join('almoxarifado_localizacao_dpto', 'almoxarifado_localizacao_dpto.id', '=', 'almoxarifado.almoxarifado_localizacao_dpto_id')
                ->where('almoxarifado.status', '=', 1)
                ->select('almoxarifado.id',
                        'almoxarifado.nm_patrimonio',
                        'almoxarifado_condicao.id',
                        'almoxarifado_tipo.id',
                        'almoxarifado_localizacao_dpto.id',
                        'almoxarifado_condicao.nm_condicao',
                        'almoxarifado_tipo.nm_tipo',
                        'almoxarifado_localizacao_dpto.nm_departamento'
                )
                ->orderBy('almoxarifado.id', 'asc')
                ->paginate(200); // Quantidade por página

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

        $almoxarifado = $query;

        //dd($query);
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

    public function pdf_dpto() {

        $departamentos = [
            3 => 'Unidade de Controle Interno - UCI',
            4 => 'Departamento de Tecnologia da informação - DITI',
            5 => 'SALA DO PRESIDENTE',
            6 => 'SALA DO GABINETE',
            7 => 'DIPREV',
            8 => 'Divisão Administrativa e Finanças - DAF',
            9 => 'Atendimento/Recadastramento - DIPREV',
            10 => 'RECEPÇÃO',
            11 => 'Almoxarifado',
            13 => 'PROJURI',
            14 => 'SALA DE REUNIÃO',
            15 => 'SECRETARIA MUNICIPAL DE GESTÃO ADMINISTRATIVA - SMGA',
            16 => 'Secretaria Municipal de Desenvolvimento Econômico, Turismo, Tecnologia e Inovação – SDTI',
            17 => 'Seção de Folha de Pagamento - SEFOPAG',
        ];

        $contadordpto = [];

        foreach ($departamentos as $departamentoId => $departamentoName) {
            $count = Almo::where('almoxarifado_localizacao_dpto_id', $departamentoId)
                    ->count();
            $contadordpto[$departamentoName] = $count;
        }

        return PDF::loadView('daf.almoxarifado.pdf.pdfDepartamento', compact('contadordpto', 'departamentos'))
                        ->setPaper('A4', "landscape")
                        // Altera o papel para modo paisagem.  "landscape"
                        //Altera o papel para modo Retrato.    'portrait'
                        ->stream('relatorio_daf.pdf');
    }

    public function pdf_condicao() {

        $almoxarifados = Almo::with('almoxarifado_condicao', 'almoxarifado_localizacao_dpto')->get();

        $lista = [];
        foreach ($almoxarifados as $almoxarifado) {
            $lista[$almoxarifado->almoxarifado_condicao->nm_condicao][] = [
                'nm_patrimonio' => $almoxarifado->nm_patrimonio,
                'condicao' => $almoxarifado->almoxarifado_condicao->nm_condicao,
                'localizacao' => $almoxarifado->almoxarifado_localizacao_dpto->nm_departamento
            ];
        }



        return PDF::loadView('daf.almoxarifado.pdf.pdfCondicao', compact('lista'))
                        ->setPaper('A4', "landscape")
                        // Altera o papel para modo paisagem.  "landscape"
                        //Altera o papel para modo Retrato.    'portrait'
                        ->stream('relatorio_daf.pdf');
    }

    public function pdf_tipo_item() {

        $almoxarifados = Almo::with('almoxarifado_condicao', 'almoxarifado_localizacao_dpto', 'almoxarifado_tipo')->get();

        $lista = [];

        foreach ($almoxarifados as $almoxarifado) {
            $lista[$almoxarifado->almoxarifado_tipo->nm_tipo][] = [
                'nm_patrimonio' => $almoxarifado->nm_patrimonio,
                'tipo' => $almoxarifado->almoxarifado_tipo->nm_tipo,
                'condicao' => $almoxarifado->almoxarifado_condicao->nm_condicao,
                'departamento' => $almoxarifado->almoxarifado_localizacao_dpto->nm_departamento
            ];
        }



        return PDF::loadView('daf.almoxarifado.pdf.pdfTipoItem', compact('lista'))
                        ->setPaper('A4', "landscape")
                        // Altera o papel para modo paisagem.  "landscape"
                        //Altera o papel para modo Retrato.    'portrait'
                        ->stream('relatorio_daf.pdf');
    }

    public function pdf_responsavel() {

        $almoxarifados = Almo::with('almoxarifado_condicao', 'almoxarifado_localizacao_dpto', 'almoxarifado_responsavel')->get();
        $lista = [];
        foreach ($almoxarifados as $almoxarifado) {
            $lista[$almoxarifado->almoxarifado_responsavel->nm_responsavel][] = [
                'nm_patrimonio' => $almoxarifado->nm_patrimonio,
                'condicao' => $almoxarifado->almoxarifado_condicao->nm_condicao,
                'tipo' => $almoxarifado->almoxarifado_tipo->nm_tipo,
                    'departamento' => $almoxarifado->almoxarifado_localizacao_dpto->nm_departamento
                    
            ];
        }



        return PDF::loadView('daf.almoxarifado.pdf.pdfResponsavel', compact('lista'))
                        ->setPaper('A4', "landscape")
                        // Altera o papel para modo paisagem.  "landscape"
                        //Altera o papel para modo Retrato.    'portrait'
                        ->stream('relatorio_daf.pdf');
    }

}
