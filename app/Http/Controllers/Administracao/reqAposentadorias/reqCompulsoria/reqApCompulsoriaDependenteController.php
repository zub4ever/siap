<?php

namespace App\Http\Controllers\Administracao\reqAposentadorias\reqCompulsoria;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest\DependenteFormRequest;
use App\Models\ApRequerimentosCompulsoria\RequerimentoDependente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest\CompulsoriaFormRequest;
use App\Models\ApRequerimentosCompulsoria\RequerimentoApCompulsoria;

use Barryvdh\DomPDF\PDF;

class reqApCompulsoriaDependenteController extends Controller
{

    public function create(int $compulsoria_id)
    {

             return view("diprev.reqAposentadorias.reqCompulsoria.dependente.create", compact(
                 'compulsoria_id'
             ));
    }
    public function store(DependenteFormRequest $request)
    {
        $compulsoria_id = RequerimentoApCompulsoria::findOrFail($request->input('requerimento_aposentadoria_compulsoria_id'));
        //dd($compulsoria_id);
        if (!$compulsoria_id->requerimento_aposentadoria_compulsoria()->create($request->all())) {
            DB::rollBack();
            return redirect()->route('reqCompulsoria.show', $compulsoria_id->id . "#step-2")
                ->with('error', "Falha ao cadastrar um proponente.");
        }



        DB::commit();

        return redirect()->route('reqCompulsoria.show',

            $compulsoria_id->id . "#step-2")->with(
            'success',
            "Dependente cadastrado com sucesso."
        );

    }

}
