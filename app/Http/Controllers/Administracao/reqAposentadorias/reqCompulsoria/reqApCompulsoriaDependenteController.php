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

        //$compulsoria_id = RequerimentoApCompulsoria ::where('id', $compulsoria_id)->first();

             return view("diprev.reqAposentadorias.reqCompulsoria.dependente.create", compact(
                 'compulsoria_id'
             ));
    }

    public function store(DependenteFormRequest $request)
    {
        $compulsoria_id = RequerimentoApCompulsoria::findOrFail($request->input('requerimento_aposentadoria_compulsoria_id'));

        //$compulsoria_id->requerimento_aposentadoria_compulsoria_id = $request->get('compulsoria_id');


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
            "** cadastrado com sucesso."
        );





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

    public function destroy($id)
    {

        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::findOrFail($id);

        DB::beginTransaction();

        if (!$reqApVoluntaria->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('reqVoluntaria.index')->with('error', "Falha ao deletar o Requerimento.");
        }

        DB::commit();

        return redirect()->route('reqVoluntaria.index')->with(
            'success',
            "Requerimento deletado com sucesso."
        );
    }

    public function pdf($id)
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
        $nome_responsavel = '';
        foreach ($termo_aposentadoria_responsavel as $termos){
        if($reqApVoluntaria->termos_aposentadoria_responsavel_id == $termos->id){
          $nome_responsavel = $termos->nm_responsavel;
        }
        }
        //dd($nome_responsavel);
        return \PDF::loadView(
            'diprev.reqAposentadorias.reqVoluntaria.pdf.Verpdf',
            compact(
                'sexo',
                'marital_status',
                'termo_aposentadoria',
                'termo_aposentadoria_responsavel',
                'vinculo_municipio',
                'orgao',
                'funcao',
                'city',
                'reqApVoluntaria',
                'nome_responsavel'
            )
        )
            ->setPaper('A4', 'portrait')
            ->stream();



    }
}
