<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DevmixController extends Controller
{
    public function viewLinks($name) {
        if(View::exists($name)){
            return view($name);
        }
        else{
            return view('404');
        }
    }
}
