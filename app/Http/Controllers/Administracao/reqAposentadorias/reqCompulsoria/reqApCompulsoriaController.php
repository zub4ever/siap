<?php

namespace App\Http\Controllers\Administracao\reqAposentadorias\reqCompulsoria;

use App\Http\Controllers\Controller;
use App\Models\ApRequerimentosCompulsoria\RequerimentoAcumuloCargos;
use App\Models\ApRequerimentosCompulsoria\RequerimentoDependente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest\CompulsoriaFormRequest;
use App\Http\Models\ApRequerimentosCompulsoria\RequerimentoApCompulsoria;

use Barryvdh\DomPDF\PDF;

class reqApCompulsoriaController extends Controller
{


//    public function show($id)
//    {
//        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::findOrFail($id);
//        $sexo = Sexo::all();
//        $marital_status = Marital_Status::all();
//        $termo_aposentadoria = TermosAposentadoria::all();
//        $termo_aposentadoria_responsavel = TermosAposentadoriaResponsavel::all();
//        $vinculo_municipio = VinculoMunicipio::all();
//        $orgao = Orgao::all();
//        $funcao = Funcao::all();
//        $city = City::all();
//        return view("diprev.reqAposentadorias.reqVoluntaria.show", compact(
//            'sexo',
//            'marital_status',
//            'termo_aposentadoria',
//            'termo_aposentadoria_responsavel',
//            'vinculo_municipio',
//            'orgao',
//            'funcao',
//            'city',
//            'reqApVoluntaria'
//        ));
//    }
    public function index()
    {
//
//        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::where('status', 1)
//            //->where('atendimento_status_id',1)
//            ->orderBY('id', 'asc')
//            ->get();


        return view("diprev.reqAposentadorias.reqCompulsoria.index");
    }

    public function create()
    {


//        $sexo = Sexo::all();
//        $marital_status = Marital_Status::all();
//        $termo_aposentadoria = TermosAposentadoria::all();
//        $termo_aposentadoria_responsavel = TermosAposentadoriaResponsavel::all();
//        $vinculo_municipio = VinculoMunicipio::all();
//        $orgao = Orgao::all();
//        $funcao = Funcao::all();
//        $city = City::all();

        return view(
            "diprev.reqAposentadorias.reqCompulsoria.create"


        );
    }

    public function store(CompulsoriaFormRequest $request)
    {

        $compulsoria = \App\Models\ApRequerimentosCompulsoria\RequerimentoApCompulsoria::create($request->all());


        if (!$compulsoria) {
            return back()->withInput();
        }

        return redirect()->route("reqCompulsoria.show", $compulsoria);

    }

    public function edit($id)
    {
        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::findOrFail($id);
        $sexo = Sexo::all();
        $marital_status = Marital_Status::all();
        $termo_aposentadoria = TermosAposentadoria::all();
        $termo_aposentadoria_responsavel = TermosAposentadoriaResponsavel::all();
        $vinculo_municipio = VinculoMunicipio::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();
        $city = City::all();

        return view(
            "diprev.reqAposentadorias.reqVoluntaria.edit",
            compact(
                'sexo',
                'marital_status',
                'termo_aposentadoria',
                'termo_aposentadoria_responsavel',
                'vinculo_municipio',
                'orgao',
                'funcao',
                'city',
                'reqApVoluntaria'
            )


        );
    }
    public function update(RequerimentoAposentadoriaVoluntariaFormRequest $request, $id)
    {

        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::findOrFail($id);

        DB::beginTransaction();

        if (!$reqApVoluntaria->update($request->all())) {

            DB::rollBack();
            return redirect()->route('reqVoluntaria.index')->with('error', "Falha na alteração do Requerimento.");
        }

        DB::commit();

        return redirect()->route('reqVoluntaria.index')->with(
            'success',
            "Requerimento alterado com sucesso."
        );
    }

    public function show(int $compulsoria_id)
    {
        $compulsoria = \App\Models\ApRequerimentosCompulsoria\RequerimentoApCompulsoria::with([

            'requerimento_aposentadoria_compulsoria.nm_requerente'
        ])
            ->findOrFail($compulsoria_id);

        $dependentes = RequerimentoDependente::where('requerimento_aposentadoria_compulsoria_id',
            $compulsoria->requerimento_aposentadoria_compulsoria_id)
            ->where('requerimento_aposentadoria_dependentes.status', 1)
            ->select(
                'requerimento_aposentadoria_dependentes.id',
                'requerimento_aposentadoria_dependentes.nm_dependente')
                ->get();






        return view("diprev.reqAposentadorias.reqCompulsoria.show", compact('dependentes', 'compulsoria'));
    }
}
