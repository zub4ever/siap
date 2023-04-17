<?php

namespace App\Http\Controllers\Servidor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Obito;
use App\Orgao;
use App\Origin;
use App\Serve;
use App\Marital_Status;
use App\Type_Serve;
use App\Orgao_Expedidor;
use App\Sexo;
use App\TipoServidor;
use App\Funcao;

class ServeController extends Controller {

    public function show($id) {

        $serve = Serve::findOrFail($id);
        $origin = Origin::all();
        $sexo = Sexo::all();
        $orgao_expedidor = Orgao_Expedidor::all();
        $obito = Obito::all();
        $type_serve = Type_Serve::all();
        $marital_status = Marital_Status::all();
        $tpservidor = TipoServidor::all();
        return view('servidor.show', compact('serve', 'origin', 'marital_status', 'sexo', 'orgao_expedidor', 'obito', 'type_serve', 'tpservidor'));
    }

    public function index() {

        $tpservidor = DB::table('tpservidor')->get()->all();
        $servidor = Serve::where('status', 1)
                ->orderBY('id')
                ->get();
        $origin = DB::table('origin')->get()->all();

        return view('servidor.index', compact('servidor', 'origin', 'tpservidor'));
    }

    public function create() {
        $origin = Origin::all();
        $sexo = Sexo::all();
        $orgao_expedidor = Orgao_Expedidor::all();
        $obito = Obito::all();
        $type_serve = Type_Serve::all();
        $marital_status = Marital_Status::all();
        $tpservidor = TipoServidor::all();
        return view('servidor.create', compact('origin', 'marital_status', 'sexo', 'orgao_expedidor', 'obito', 'type_serve', 'tpservidor'));
    }

    public function store(ServeFormRequest $request) {

        DB::beginTransaction();

        $serve = Serve::create($request->all());

        if (!$serve) {
            DB::rollBack();
            return redirect()->route('servidor.index')->with('error', "Falha ao cadastrar o Servidor.");
        }
        $serve->save();
        DB::commit();

        return redirect()->route('servidor.index')->with(
                        'success',
                        "Servidor cadastrado com sucesso."
        );
    }

    public function edit($id) {

        $origin = Origin::get();
        $sexo = Sexo::get();
        $orgao_expedidor = Orgao_Expedidor::get();
        $obito = Obito::get();
        $type_serve = Type_Serve::get();
        $marital_status = Marital_Status::get();
        $tpservidor = TipoServidor::get();

        $serve = Serve::findOrFail($id);
        return view('servidor.edit', compact('serve', 'origin', 'sexo', 'orgao_expedidor', 'obito', 'type_serve', 'marital_status', 'tpservidor'));
    }

    public function update(ServeFormRequest $request, $id) {

        $serve = Serve::findOrFail($id);

        DB::beginTransaction();

        if (!$serve->update($request->all())) {

            DB::rollBack();
            return redirect()->route('servidor.index')->with('error', "Falha na alteração do servidor.");
        }

        DB::commit();

        return redirect()->route('servidor.index')->with(
                        'success',
                        "Servidor alterado com sucesso."
        );
    }

    public function destroy($id) {

        $serve = Serve::findOrFail($id);

        DB::beginTransaction();

        if (!$serve->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('servidor.index')->with('error', "Falha ao deletar o Servidor.");
        }

        DB::commit();

        return redirect()->route('servidor.index')->with(
                        'success',
                        "Servidor deletado com sucesso."
        );
    }

}
