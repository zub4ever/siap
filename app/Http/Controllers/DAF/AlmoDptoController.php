<?php

namespace App\Http\Controllers\DAF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
//use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO;
use App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest\DptoFormRequest;


class AlmoDptoController extends Controller
{

    public function index()
    {

        $departamento = AlmoLocalizacaoDPTO::where('status',1 ) 
        ->orderBY('id', 'asc')
        ->get();



        return view('daf.departamento.index',compact('departamento'));
    }
    public function create()
    {


        return view('daf.departamento.create');
    }

    public function store(DptoFormRequest $request)
    {

        DB::beginTransaction();

        $departamento = AlmoLocalizacaoDPTO::create($request->all());

        if (!$departamento) {
            DB::rollBack();
            return redirect()->route('departamento.index')->with('error', "Falha ao cadastrar o departamento.");
        }
        $departamento->save();
        DB::commit();

        return redirect()->route('departamento.index')->with(
            'success',
            "departamento cadastrado com sucesso."
        );
    }
    public function edit($id)
    {

        $departamento = AlmoLocalizacaoDPTO::findOrFail($id);

        


        return view('daf.departamento.edit',compact('departamento'));
    }
        public function update(DptoFormRequest $request, $id) {

        $departamento = AlmoLocalizacaoDPTO::findOrFail($id);


        DB::beginTransaction();

        if (!$departamento->update($request->all())) {

            DB::rollBack();
            return redirect()->route('departamento.index')->with('error', "Falha na alteração do departamento.");
        }

        DB::commit();

        return redirect()->route('departamento.index')->with(
            'success',
            "departamento alterado com sucesso."
        );
    }
    public function destroy($id)
    {

        $departamento = AlmoLocalizacaoDPTO::findOrFail($id);


        DB::beginTransaction();

        if (!$departamento->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('departamento.index')->with('error', "Falha ao deletar o departamento.");
        }

        DB::commit();

        return redirect()->route('departamento.index')->with(
            'success',
            "departamento deletado com sucesso."
        );
    }
}
