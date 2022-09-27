<?php

namespace App\Http\Controllers\Administracao\reqAposentadorias\reqCompulsoria;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest\AcumuloCargosFormRequest;
use App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest\DependenteFormRequest;
use App\Models\ApRequerimentosCompulsoria\RequerimentoDependente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest\CompulsoriaFormRequest;
use App\Models\ApRequerimentosCompulsoria\RequerimentoApCompulsoria;

use Barryvdh\DomPDF\PDF;

class reqApCompulsoriaAcumuloCargosController extends Controller
{

    public function create(int $compulsoria_id)
    {

        return view("diprev.reqAposentadorias.reqCompulsoria.acumuloCargos.create", compact(
            'compulsoria_id'
        ));
    }
    public function store(AcumuloCargosFormRequest $request){
        $compulsoria_id = RequerimentoApCompulsoria::findOrFail($request->input('requerimento_aposentadoria_compulsoria_id'));
        //dd($compulsoria_id);
        if (!$compulsoria_id->requerimento_aposentadoria_compulsoria()->create($request->all())) {
            DB::rollBack();
            return redirect()->route('reqCompulsoria.show', $compulsoria_id->id . "#step-2")
                ->with('error', "Falha ao cadastrar um proponente.");
        }
        DB::commit();
        return redirect()->route('reqCompulsoria.show',
            $compulsoria_id->id . "#step-3")->with(
            'success',
            "Cargos cadastrado com sucesso."
        );
    }


    public function show(int $compulsoria_id, int $acumuloCargo_id)
    {
        $meta = ProjetoMeta::with('unidade', 'status')->findOrFail($acumuloCargo_id);

        return view('programa.projeto.meta.show', compact('compulsoria_id', 'meta', 'subMetas'));
    }

}
