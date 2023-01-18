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
        //Atendimento Tipo_Assunto 4 Tirar Duvidas
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '4') ////Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '4') ////Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoTD = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '4') //Tirar duvidas
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Atendimento Tipo_Assunto 5 SAC
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoSAC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '5') //SAC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Atendimento Tipo_Assunto 6 APA
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoAPA = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '6') //APA
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Atendimento Tipo_Assunto 7 APP
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoAPP = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '7') //APP
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Atendimento Tipo_Assunto 8 ABERTURA DE PROCESSO PARA EMISSÃO DE CTC
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '8') //CAPECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '8') //CAPECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '8') //CAPECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '8') //CAPECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoAPECTC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '8') //APECTC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        
        
        
        //Atendimento Tipo_Assunto 9 recadstramento
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '9') //Crecadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '9') //recadstramento
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        
        
        //Atendimento Tipo_Assunto 10 CONTRACHEQUE
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '10') //CCONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '10') //CCONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoCONTRACHEQUE = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '10') //CONTRACHEQUE
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        
       	//Atendimento Tipo_Assunto 11 ABPIR
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '11') //CABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoABPIR = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '11') //ABPIR
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count(); 
        
       	//Atendimento Tipo_Assunto 12 APS
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoAPS = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '12') //APS
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count(); 
        
        		//Atendimento Tipo_Assunto 13 Cedula c CEDC
        //Status 1 Aberta
        $domingoAbertaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAbertaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAbertaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAbertaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAbertaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAbertaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAbertaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '1')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado               
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();

        //Status 2 Fechada 
        $domingoFechadaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaFechadaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaFechadaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaFechadaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaFechadaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaFechadaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoFechadaTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '2')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '6')       //Sabado                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        //Status 3 Andamento

        $domingoAndamentoTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '0')       //Domingo
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $segundaAndamentoTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '1')       //Segunda Feira
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $tercaAndamentoTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '2')       //Terça-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quartaAndamentoTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '3')       //Quarta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $quintaAndamentoTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '4')       //Quinta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sextaAndamentoTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
                        ->where(DB::raw("extract (dow from c.created_at)"), '5')       //Sexta-feira                
                        ->where(DB::raw("extract (day from c.created_at)"), DB::raw("extract (day from CURRENT_DATE)"))->count();
        $sabadoAndamentoTipoAtendimentoCEDC = DB::table('atendimento as c')
                        ->join('atendimento_status as sts', 'c.atendimento_status_id', '=', 'sts.id')
                        ->join('atendimento_assunto as assunto', 'c.atendimento_assunto_id', '=', 'assunto.id')
                        ->select('c.id', 'c.atendimento_assunto_id', 'c.atendimento_status_id', 'c.created_at')
                        ->where('c.atendimento_status_id', '=', '3')
                        ->where('c.atendimento_assunto_id', '=', '13') //CEDC
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
