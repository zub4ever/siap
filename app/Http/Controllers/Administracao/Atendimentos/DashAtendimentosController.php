<?php

namespace App\Http\Controllers\Administracao\Atendimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\AtendimentoFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Atendimento;
use App\AtendimentoStatus;
use PDF;
use Carbon\Carbon;
use Gate;
use App\AtendimentoAssunto;
use App\City;
use App\State;
use App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO;
use Khill\Lavacharts\Lavacharts;
use App\Charts\UserChart;

class DashAtendimentosController extends Controller {

    public function index() {

        //select count(*) from atendimento where extract (month from created_at) = 11;
        $atendimentos = DB::table('atendimento')->get();

        $countTotal = DB::table('atendimento as c')->count();

        $counts = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id')
                        ->where('c.atendimento_status_id', '=', '1')->count();
        //Denuncias Fechadas
        $countFechadas = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id')
                        ->where('c.atendimento_status_id', '=', '2')->count();
        $countAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id')
                        ->where('c.atendimento_status_id', '=', '3')->count();

        $domingoAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $segundaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $tercaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $quartaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $quintaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $sextaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $sabadoAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

//Fechadas
        $domingoFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $segundaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $tercaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $quartaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $quintaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $sextaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $sabadoFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //SEMANA EM ANDAMENTO
        $domingoAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $tercaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $quartaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $quintaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $sextaAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $sabadoAndamento = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $lava = new Lavacharts;
        $finances = \Lava::DataTable();
        $finances->addStringColumn('Denuncias')
                ->addNumberColumn('Abertas')
                ->addRoleColumn('string', 'style')
                ->addNumberColumn('Fechadas')
                ->addRoleColumn('string', 'style')
                ->addNumberColumn('Indeferidas')
                ->addRoleColumn('string', 'style');
        $finances->addRow(['Domingo', $domingoAberta, '#67CB42', $domingoFechada, '#17B7B5', $domingoAndamento, '#CDD71C'])
                ->addRow(['Segunda-feira', $segundaAberta, '#67CB42', $segundaFechada, '#17B7B5', $segundaAndamento, '#CDD71C'])
                ->addRow(['Terça-feira', $tercaAberta, '#67CB42', $tercaFechada, '#17B7B5', $tercaAndamento, '#CDD71C'])
                ->addRow(['Quarta-feira', $quartaAberta, '#67CB42', $quartaFechada, '#17B7B5', $quartaAndamento, '#CDD71C'])
                ->addRow(['Quinta-feira', $quintaAberta, '#67CB42', $quintaFechada, '#17B7B5', $quintaAndamento, '#CDD71C'])
                ->addRow(['Sexta-feira', $sextaAberta, '#67CB42', $sextaFechada, '#17B7B5', $sextaAndamento, '#CDD71C'])
                ->addRow(['Sábado', $sabadoAberta, '#67CB42', $sabadoFechada, '#17B7B5', $sabadoAndamento, '#CDD71C']);

        \LAVA::ColumnChart('Finances', $finances, [
            'title' => '',
            'legend' => 'none',
            'backgroundColor' => '#EAEAEE',
            'vAxis' => [
                'title' => 'Quantidade'
            ],
            'titleTextStyle' => [
                'color' => '#0000',
                'fontSize' => 14
            ],
            'vAxis' => [
                'gridlines' => ['count' => -1]
            ]
        ]);
        //DENÚNCIAS DIA                             
        $totalDia = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $totalDiaAberta = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $totalDiaFechada = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $totalDiaIndeferida = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->select('c.id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        $data = Carbon::now();

        $atual = Carbon::parse($data)->format('d/m/Y');

        $reasons = \Lava::DataTable();

        $reasons->addStringColumn('Denuncias')
                ->addNumberColumn('%');
        //->addRoleColumn('string', 'style');
        $reasons->addRow(['Total', $totalDia])
                ->addRow(['Abertas', $totalDiaAberta])
                ->addRow(['Fechadas', $totalDiaFechada])
                ->addRow(['Indeferidas', $totalDiaIndeferida]);

        \LAVA::PieChart('IMDB', $reasons, [
            'title' => '',
            'is3D' => true,
            'legend' => 'none',
            'backgroundColor' => '#EAEAEE',
            'titleTextStyle' => [
                'color' => '#0000',
                'fontSize' => 14
            ],
            'colors' => array('#F68936', '#67CB42', '#17B7B5', '#CDD71C'),
            'slices' => [
                ['offset' => 0.1],
                ['offset' => 0.25],
                ['offset' => 0.35],
                ['offset' => 0.4]
            ]
        ]);

        //Atendimentos Semana por tipo de atendimento
        //Atendimento Tipo_Assunto 1 Consultar pagamento
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoCP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '1') //Consultar Pagamento
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Atendimento Tipo_Assunto 2 Consultar Consignado
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consigando
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoCC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '2') //Consultar Consignado
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        
        //Atendimento Tipo_Assunto 3 Imprimir Contracheque
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimnir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir COntracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir COntracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir COntracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoIC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '3') //Imprimir Contracheque
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        return view("administracao.atendimentosDash.index", compact('atendimentos', 'countFechadas', 'countAndamento',
                        'totalDiaAberta',
                        'totalDiaFechada',
                        'totalDiaIndeferida',
                        'totalDia',
                        'segundaAberta',
                        'countTotal', 'counts', 'countFechadas', 'countAndamento',
                        
                ),
                [
                    "counts" => $counts,
                    'atual' => $atual,
                    "lava" => $lava,
                    "sabadoAberta" => $sabadoAberta
        ]);

        //function
    }

    //Historico de atendimentos
}
