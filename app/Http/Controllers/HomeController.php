<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Atendimento;
use Carbon\Carbon;
use App\Serve;

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
        

        $atendimentos = Atendimento::where('status', 1)->count();
        
        
        
        
        
        $serve = DB::table('serve')->count();
        $serveAp = Serve::where('tp_servidor_id', 1)->count(); //Count de servidores aposentados
        $servePs = Serve::where('tp_servidor_id', 2)->count(); //Count de servidores pensionistas
        



        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        return view('/home', compact('serve','serveAp','servePs','atendimentos'));
    }
}
