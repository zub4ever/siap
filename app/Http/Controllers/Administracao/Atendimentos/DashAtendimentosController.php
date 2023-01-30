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
        $weekdays = ['Domingo', 'Segunda-Feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
        $today = Carbon::today();
        $startOfWeek = $today->startOfWeek();

        foreach ($weekdays as $weekday) {
            $count = Atendimento::whereBetween('created_at', [$startOfWeek, $startOfWeek->copy()->endOfDay()])
                    ->count();
            $results[$weekday] = $count;
            $startOfWeek->addDay();
        }





        return view("administracao.atendimentosDash.countByDayWeek", ['results' => $results]);
    }

    public function countByDayOfWeek() {
        $results = [];

        $dates = YourModel::select(\DB::raw('date(created_at) as created_date, count(*) as total'))
                ->groupBy(\DB::raw('date(created_at), date_part(\'dow\', created_at)'))
                ->get();

        foreach ($dates as $date) {
            $dayOfWeek = Carbon::parse($date->created_date)->dayOfWeek;
            $results[$dayOfWeek][] = $date->total;
        }

        return response()->json($results);
    }

    //Historico de atendimentos
}
