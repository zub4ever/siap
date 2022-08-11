<?php

namespace App\Http\Controllers\DAF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
//use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\DAF\Almoxarifado\AlmoResponsavel;
use App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest\ResponsavelFormRequest;


class AlmoResponsavelController extends Controller
{

    public function index()
    {

        $responsavel = AlmoResponsavel::where('status',1 ) 
        ->orderBY('id', 'asc')
        ->get();



        return view('daf.responsavel.index',compact('responsavel'));
    }
    public function create()
    {


        return view('daf.responsavel.create');
    }

    public function store(ResponsavelFormRequest $request)
    {

        DB::beginTransaction();

        $responsavel = AlmoResponsavel::create($request->all());

        if (!$responsavel) {
            DB::rollBack();
            return redirect()->route('responsavel.index')->with('error', "Falha ao cadastrar o responsavel.");
        }
        $responsavel->save();
        DB::commit();

        return redirect()->route('responsavel.index')->with(
            'success',
            "Responsavel cadastrado com sucesso."
        );
    }
    public function edit($id)
    {

        $responsavel = AlmoResponsavel::findOrFail($id);

        


        return view('daf.responsavel.edit',compact('responsavel'));
    }
        public function update(ResponsavelFormRequest $request, $id) {

        $responsavel = AlmoResponsavel::findOrFail($id);


        DB::beginTransaction();

        if (!$responsavel->update($request->all())) {

            DB::rollBack();
            return redirect()->route('responsavel.index')->with('error', "Falha na alteração do responsavel.");
        }

        DB::commit();

        return redirect()->route('responsavel.index')->with(
            'success',
            "Responsavel alterado com sucesso."
        );
    }
    public function destroy($id)
    {

        $responsavel = AlmoResponsavel::findOrFail($id);


        DB::beginTransaction();

        if (!$responsavel->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('responsavel.index')->with('error', "Falha ao deletar o responsavel.");
        }

        DB::commit();

        return redirect()->route('responsavel.index')->with(
            'success',
            "Responsavel deletado com sucesso."
        );
    }
}
