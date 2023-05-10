<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Atendimento;
use Carbon\Carbon;
use App\Serve;
use App\Models\DAF\Almoxarifado\Almo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //;$serve = DB::table('serve')->get();


        $atendimentos = DB::table('atendimento')->count();
        $atendimentosAbertos = Atendimento::where('atendimento_status_id', 1)->count();
        $atendimentosFechados = Atendimento::where('atendimento_status_id', 2)->count();
        $atendimentosAndamento = Atendimento::where('atendimento_status_id', 3)->count();
//
        $serve = DB::table('serve')->count();
        $serveAp = Serve::where('tp_servidor_id', 1)->count(); //Count de servidores aposentados
        $servePs = Serve::where('tp_servidor_id', 2)->count(); //Count de servidores pensionistas

        //Almozarifado

        $itensTotal = DB::table('almoxarifado')->count();
        $itensEquipamento = Almo::where('almoxarifado_tipo_id',1)->count();
        $itensMobiliario = Almo::where('almoxarifado_tipo_id',2)->count();
        $itensInformatica= Almo::where('almoxarifado_tipo_id',3)->count();






        return view('/home', compact('serve','serveAp','servePs','atendimentos','atendimentosAbertos',
            'atendimentosFechados','atendimentosAndamento',
        'itensTotal','itensEquipamento','itensMobiliario', 'itensInformatica'
        ));
    }
}
