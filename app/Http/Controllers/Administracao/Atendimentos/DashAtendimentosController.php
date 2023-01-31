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

    public function countByDayWeek() {

        $results = [];
        $weekdays = ['Segunda-Feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado', 'Domingo'];
        $today = Carbon::today();
        $startOfWeek = $today->startOfWeek();

        foreach ($weekdays as $weekday) {
            $count = Atendimento::whereBetween('created_at', [$startOfWeek, $startOfWeek->copy()->endOfDay()])
                    ->count();
            $results[$weekday] = $count;
            $startOfWeek->addDay();
        }


        //Contador de Dados
        $dayOfWeek = [
            1 => 'Segunda-feira',
            2 => 'Terça-feira',
            3 => 'Quarta-feira',
            4 => 'Quinta-feira',
            5 => 'Sexta-feira',
            6 => 'Sábado',
            7 => 'Domingo'
        ];

        $typeOfAttendance = [
            1 => 'Consultar pagamento',
            2 => 'Consultar consignado',
            3 => 'Imprimir Contracheque',
            4 => 'Tirar dúvidas',
            5 => 'Solicitar alteração cadastral',
            6 => 'Abertura de Processo de aposentadoria',
            7 => 'Abertura de Processo de Pensão',
            8 => 'Abertura de processo para Emissão de CTC',
            9 => 'Recadastramento',
            10 => 'Contracheque',
            11 => 'Abertura de Processo de Imposto de Renda',
            12 => 'Abertura de processo de 13º Salário',
            13 => 'Cédula C'
        ];

        // Recupera o primeiro e o último dia da semana corrente
        $firstDayOfWeek = date('Y-m-d', strtotime('Monday this week'));
        $lastDayOfWeek = date('Y-m-d', strtotime('Sunday this week'));

        $data = [];
        foreach ($dayOfWeek as $dayNumber => $dayName) {
            foreach ($typeOfAttendance as $typeId => $typeName) {
                $count = DB::table('atendimento')
                        ->whereBetween('created_at', [$firstDayOfWeek, $lastDayOfWeek])
                        ->where('atendimento_assunto_id', $typeId)
                        ->whereRaw("EXTRACT(DOW FROM created_at) = {$dayNumber}")
                        ->count();

                $data[$dayName][$typeName] = $count;
            }
        }



        //Grafico evolutivo
        $dados = DB::table('atendimento')
                ->select(
                        DB::raw("to_char(created_at, 'YYYY-MM') as mes"),
                        'atendimento_assunto_id',
                        DB::raw('count(id) as quantidade')
                )
                ->groupBy('mes', 'atendimento_assunto_id')
                ->get();

        return view("administracao.atendimentosDash.countByDayWeek", ['results' => $results,
            'data' => $data,
            'typeOfAttendance' => $typeOfAttendance,
            'dados' => $dados,
            'dayOfWeek'=>$dayOfWeek
        ]);
    }

    //Historico de atendimentos
}
