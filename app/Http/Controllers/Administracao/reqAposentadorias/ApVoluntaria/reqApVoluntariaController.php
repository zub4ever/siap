<?php

namespace App\Http\Controllers\Administracao\reqAposentadorias\ApVoluntaria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ApRequerimentosResquest\RequerimentoAposentadoriaVoluntariaFormRequest;
use App\Models\ApRequerimentos\TermosAposentadoria;
use App\Models\ApRequerimentos\TermosAposentadoriaResponsavel;
use App\Models\ApRequerimentos\VinculoMunicipio;
use App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria;
use App\Sexo;
use App\Orgao;
use App\Funcao;
use App\City;
use App\Marital_Status;
use Barryvdh\DomPDF\PDF;

class reqApVoluntariaController extends Controller
{


    public function show($id)
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
        return view("diprev.reqAposentadorias.reqVoluntaria.show", compact(
            'sexo',
            'marital_status',
            'termo_aposentadoria',
            'termo_aposentadoria_responsavel',
            'vinculo_municipio',
            'orgao',
            'funcao',
            'city',
            'reqApVoluntaria'
        ));
    }
    public function index()
    {

        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::where('status', 1)
            //->where('atendimento_status_id',1)
            ->orderBY('id', 'asc')
            ->get();


        return view("diprev.reqAposentadorias.reqVoluntaria.index", compact('reqApVoluntaria'));
    }

    public function create()
    {


        $sexo = Sexo::all();
        $marital_status = Marital_Status::all();
        $termo_aposentadoria = TermosAposentadoria::all();
        $termo_aposentadoria_responsavel = TermosAposentadoriaResponsavel::all();
        $vinculo_municipio = VinculoMunicipio::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();
        $city = City::all();

        return view(
            "diprev.reqAposentadorias.reqVoluntaria.create",
            compact(
                'sexo',
                'marital_status',
                'termo_aposentadoria',
                'termo_aposentadoria_responsavel',
                'vinculo_municipio',
                'orgao',
                'funcao',
                'city'
            )


        );
    }

    public function store(RequerimentoAposentadoriaVoluntariaFormRequest $request)
    {
        DB::beginTransaction();
        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::create($request->all());

        //dd($reqApVoluntaria);
        if (!$reqApVoluntaria) {
            DB::rollBack();
            return redirect()->route('reqVoluntaria.index')->with('error', "Falha ao cadastrar requerimento.");
        }

        $reqApVoluntaria->save();
        DB::commit();

        return redirect()->route('reqVoluntaria.index')->with(
            'success',
            "Requerimento cadastrado com sucesso."
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
