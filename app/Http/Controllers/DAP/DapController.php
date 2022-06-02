<?php

namespace App\Http\Controllers\DAP;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;









class DapController extends Controller

{
    
    public function index(){
       

        return view("dap.index");
    }
    
    
    
    
}
