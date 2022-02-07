<?php

namespace App\Http\Controllers;
use sistemaSemeia\Serve;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Atendimento;
use Carbon\Carbon;

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
        

        $atendimentos = Atendimento::where('status', 1)->count();



        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        return view('/home', compact('serve','atendimentos'));
    }
}
