<?php

namespace App\Http\Controllers;
use sistemaSemeia\Serve;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Atendimento;

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
        
        $serve = DB::table('serve')->get();
        

        $atendimentos = Atendimento::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');



        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        return view('/home', compact('serve','atendimentos'));
    }
}
