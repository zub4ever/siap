<?php

namespace App\Http\Controllers\DAF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
//use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\DAF\Almoxarifado\AlmoMarca;
use App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest\MarcaFormRequest;


class AlmoMarcaController extends Controller
{

    public function index()
    {

        $marca = AlmoMarca::where('status',1 ) 
        ->orderBY('id', 'asc')
        ->get();



        return view('daf.marca.index',compact('marca'));
    }
    public function create()
    {


        return view('daf.marca.create');
    }

    public function store(MarcaFormRequest $request)
    {

        DB::beginTransaction();

        $marca = AlmoMarca::create($request->all());

        if (!$marca) {
            DB::rollBack();
            return redirect()->route('marca.index')->with('error', "Falha ao cadastrar a marca.");
        }
        $marca->save();
        DB::commit();

        return redirect()->route('marca.index')->with(
            'success',
            "Marca cadastrado com sucesso."
        );
    }
    public function edit($id)
    {

        $marca = AlmoMarca::findOrFail($id);

        


        return view('daf.marca.edit',compact('marca'));
    }
        public function update(MarcaFormRequest $request, $id) {

        $marca = AlmoMarca::findOrFail($id);


        DB::beginTransaction();

        if (!$marca->update($request->all())) {

            DB::rollBack();
            return redirect()->route('marca.index')->with('error', "Falha na alteração do marca.");
        }

        DB::commit();

        return redirect()->route('marca.index')->with(
            'success',
            "Marca alterado com sucesso."
        );
    }
    public function destroy($id)
    {

        $marca = AlmoMarca::findOrFail($id);


        DB::beginTransaction();

        if (!$marca->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('marca.index')->with('error', "Falha ao deletar a Marca.");
        }

        DB::commit();

        return redirect()->route('marca.index')->with(
            'success',
            "Marca deletado com sucesso."
        );
    }
}
