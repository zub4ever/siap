<?php

namespace App\Http\Controllers\Servidor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServeController extends Controller {

    //
    public function index() {
        return view('servidor.index');
    }

    public function show() {
        return view('servidor.index');
    }

    public function create() {
        return view('servidor.create');
    }

    public function store(ServeFormRequest $request) {
        
        DB::beginTransaction();
        
         $serve = Serve::create($request->all());
        
         if (!$serve) {
            DB::rollBack();
            return redirect()->route('servidor.index')->with('error', "Falha ao cadastrar o Servidor.");
        }
        
        return view('servidor.create');
    }

}
