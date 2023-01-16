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

        $domingoAberta = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 0	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 1');
        $segundaAberta = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 1	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 1');

        $tercaAberta = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 2	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 1');

        $quartaAberta = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 3	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 1');

        $quintaAberta = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 4	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 1');

        $sextaAberta = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 5	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 1');

        $sabadoAberta = DB::select('select  count(*)  from atendimento 
                                   inner join atendimento_status 
                                   on atendimento_status.id = atendimento.atendimento_status_id  
                                   where extract (dow from atendimento.created_at) = 6	
                                   and 
                                   extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                   and 
                                   atendimento.atendimento_status_id = 1');

//Fechadas
        $domingoFechada = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 0	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 2');
        $segundaFechada = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 1	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 2');

        $tercaFechada = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 2	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 2');

        $quartaFechada = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 3	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 2');

        $quintaFechada = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 4	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 2');

        $sextaFechada = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 5	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 2');

        $sabadoFechada = DB::select('select  count(*)  from atendimento 
                                   inner join atendimento_status 
                                   on atendimento_status.id = atendimento.atendimento_status_id  
                                   where extract (dow from atendimento.created_at) = 6	
                                   and 
                                   extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                   and 
                                   atendimento.atendimento_status_id = 2');
        //SEMANA EM ANDAMENTO
        $domingoAndamento = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 0	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 3');
        $segundaAndamento = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 1	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 3');

        $tercaAndamento = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 2	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 3');

        $quartaAndamento = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 3	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 3');

        $quintaAndamento = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 4	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 3');

        $sextaAndamento = DB::select('select  count(*)  from atendimento 
                                    inner join atendimento_status 
                                    on atendimento_status.id = atendimento.atendimento_status_id  
                                    where extract (dow from atendimento.created_at) = 5	
                                    and
                                    extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                    and 
                                    atendimento.atendimento_status_id = 3');

        $sabadoAndamento = DB::select('select  count(*)  from atendimento 
                                   inner join atendimento_status 
                                   on atendimento_status.id = atendimento.atendimento_status_id  
                                   where extract (dow from atendimento.created_at) = 6	
                                   and 
                                   extract (WEEK from atendimento.created_at) = extract (WEEK from CURRENT_DATE)
                                   and 
                                   atendimento.atendimento_status_id = 3');

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
        $totalDi = DB::select('select count(*)as totalDia from atendimento 
        inner join atendimento_status 
        on atendimento_status.id = atendimento.atendimento_status_id
        where extract (day from atendimento.created_at) = extract (day from CURRENT_DATE)');
        
       $totalDia = DB::select('select count(atendimento.id) from atendimento 
inner join atendimento_status 
on atendimento_status.id = atendimento.atendimento_status_id
where extract (day from atendimento.created_at) = extract (day from CURRENT_DATE)
GROUP BY
	atendimento.id');

        $totalDiaAberta = DB::select('select count(*) as totalDiaAberta from atendimento 
        inner join atendimento_status 
        on atendimento_status.id = atendimento.atendimento_status_id
        where extract (day from atendimento.created_at) = extract (day from CURRENT_DATE)
        and 
        atendimento.atendimento_status_id = 1');

        $totalDiaFechada = DB::select('select count(*) as totalDiaFechada from atendimento 
        inner join atendimento_status 
        on atendimento_status.id = atendimento.atendimento_status_id
        where extract (day from atendimento.created_at) = extract (day from CURRENT_DATE)
        and 
        atendimento.atendimento_status_id = 2');

        $totalDiaIndeferida = DB::select('select count(*) as totalDiaIndeferida from atendimento 
        inner join atendimento_status 
        on atendimento_status.id = atendimento.atendimento_status_id
        where extract (day from atendimento.created_at) = extract (day from CURRENT_DATE)
        and 
        atendimento.atendimento_status_id = 3');
        $data = Carbon::now();

        
        
        
        $atual = Carbon::parse($data)->format('d/m/Y');

        return view("administracao.atendimentosDash.index", compact('atendimentos', 'countFechadas', 'countAndamento',
                        'totalDia',
                        'totalDiaAberta',
                        'totalDiaFechada',
                        'totalDiaIndeferida'
                       
                ),
                [
                    "counts" => $counts,
                    'atual' => $atual,
                    "lava" => $lava,
                    "sabadoAberta" => $sabadoAberta
        ]);
    }

    //Historico de atendimentos
}
