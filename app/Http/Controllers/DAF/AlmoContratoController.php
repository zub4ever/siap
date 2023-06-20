<?php

namespace App\Http\Controllers\DAF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use App\Http\Requests\ServeFormRequest;
use App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO;
use App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest\ContratoFormRequest;
use App\Models\DAF\Almoxarifado\AlmoContrato;

class AlmoContratoController extends Controller
{

    public function index(){

        $contrato = AlmoContrato::where('status',1 )
        ->orderBY('id', 'asc')
        ->get();
        return view('daf.contrato.index',compact('contrato'));
    }
    public function create()
    {


        return view('daf.contrato.create');
    }

    public function store(ContratoFormRequest $request)
    {

        DB::beginTransaction();

        $contrato = AlmoContrato::create($request->all());

        if (!$contrato) {
            DB::rollBack();
            return redirect()->route('contrato.index')->with('error', "Falha ao cadastrar o contrato.");
        }
        $contrato->save();
        DB::commit();

        return redirect()->route('contrato.index')->with(
            'success',
            "Contrato cadastrado com sucesso."
        );
    }
    public function edit($id)
    {

        $contrato = AlmoContrato::findOrFail($id);




        return view('daf.contrato.edit',compact('contrato'));
    }
        public function update(ContratoFormRequest $request, $id) {

        $contrato = AlmoContrato::findOrFail($id);


        DB::beginTransaction();

        if (!$contrato->update($request->all())) {

            DB::rollBack();
            return redirect()->route('contrato.index')->with('error', "Falha na alteração do Contrato.");
        }

        DB::commit();

        return redirect()->route('contrato.index')->with(
            'success',
            "Contrato alterado com sucesso."
        );
    }
    public function destroy($id)
    {

        $contrato = AlmoContrato::findOrFail($id);


        DB::beginTransaction();

        if (!$contrato->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('contrato.index')->with('error', "Falha ao deletar o Contrato.");
        }

        DB::commit();

        return redirect()->route('contrato.index')->with(
            'success',
            "Contrato deletado com sucesso."
        );
    }
}
