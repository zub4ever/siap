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
use DateTime;
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
            'dayOfWeek' => $dayOfWeek
        ]);
    }

    //IndexPDF
    public function index() {
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
            9 => ' Recadastramento',
            10 => 'CC',
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



        //Grafico anual
        $dados = DB::table('atendimento')
                ->select(
                        DB::raw("to_char(created_at, 'YYYY-MM') as mes"),
                        'atendimento_assunto_id',
                        DB::raw('count(id) as quantidade')
                )
                ->whereYear('created_at', '=', '2023')
                ->groupBy('mes', 'atendimento_assunto_id')
                ->get();

        $meses = [
            '01' => 'Janeiro',
            '02' => 'Fevereiro',
            '03' => 'Março',
            '04' => 'Abril',
            '05' => 'Maio',
            '06' => 'Junho',
            '07' => 'Julho',
            '08' => 'Agosto',
            '09' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro'
        ];

        $tipos_atendimento = [
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

        return \PDF::loadView('administracao.atendimentosDash.index',
                                ['results' => $results,
                                    'data' => $data,
                                    'typeOfAttendance' => $typeOfAttendance,
                                    'dados' => $dados,
                                    'dayOfWeek' => $dayOfWeek,
                                    'meses' => $meses,
                                    'tipos_atendimento' => $tipos_atendimento
                                ]
                        )
                        ->setPaper('A4', 'landscape')
                        ->stream();
    }

    public function relatorioAnual() {

        /*
          $meses = [
          'Janeiro',
          'Fevereiro',
          'Março',
          'Abril',
          'Maio',
          'Junho',
          'Julho',
          'Agosto',
          'Setembro',
          'Outubro',
          'Novembro',
          'Dezembro'
          ];

          $atendimentos = Atendimento::where('atendimento_assunto_id', 9)
          ->whereYear('created_at', 2023)
          ->get();

          $dados = [];
          foreach ($meses as $index => $mes) {
          $data = $atendimentos->whereBetween('created_at', [
          Carbon::create(2023, $index + 1, 1, 0, 0, 0),
          Carbon::create(2023, $index + 1, 31, 23, 59, 59)
          ]);

          if ($data->count()) {
          $dados[$mes] = $data->map(function ($atendimento) {
          return [
          'nm_assegurado' => $atendimento->nm_assegurado,
          'matricula' => $atendimento->matricula,
          'cpf' => $atendimento->cpf
          ];
          });
          }
          } */
        /* $meses = [
          "01" => "Janeiro",
          "02" => "Fevereiro",
          "03" => "Março",
          "03" => "Abril",
          "05" => "Maio",
          "06" => "Junho",
          "07" => "Julho",
          "08" => "Agosto",
          "09" => "Setembro",
          "10" => "Outubro",
          "11" => "Novembro",
          "12" => "Dezembro",
          ]; */


        $atendimentos = DB::table('atendimento')
                ->select('nm_assegurado', 'matricula', 'cpf', 'atendimento_tipo_servidor.nm_tipo_servidor', 
                         DB::raw('date_trunc(\'month\', atendimento.created_at) as month'), 
                         DB::raw('date(atendimento.created_at) as created_at'))
                ->join('atendimento_tipo_servidor', 'atendimento_tipo_servidor.id', '=', 'atendimento.atendimento_tipo_servidor_id')
                ->where('atendimento_assunto_id', 9)
                ->whereYear('atendimento.created_at', 2023)
                ->groupBy('nm_assegurado', 'matricula', 'cpf', 'atendimento_tipo_servidor.nm_tipo_servidor', 'month', 'atendimento.created_at')
                ->orderBy('month')
                ->get();


        $months = [];
        foreach ($atendimentos as $atendimento) {
            if (!in_array($atendimento->month, $months)) {
                $months[] = $atendimento->month;
            }
        }
        //dd($data);
        return \PDF::loadView('administracao.atendimentosDash.relatorioAnualRecadastramento',
                                compact('months', 'atendimentos')
                        )
                        ->setPaper('A4', 'landscape')
                        ->stream();
    }

    public function painel($id) {

        $atendimento = DB::table('atendimento')
                ->where('atendimento_status_id', 1)
                ->get();

        return view('administracao.atendimentosDash.painel', compact('atendimento'));
    }

}
