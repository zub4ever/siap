<?php

namespace App\Http\Controllers\DAF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
//use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;


class DafController extends Controller {

    public function index(){
        
        
      
        return view('daf.index');        
    }

  
}
