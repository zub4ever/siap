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
use App\Sexo;
use App\Orgao;
use App\Funcao;
use App\City;

class reqApVoluntariaController extends Controller {

    public function index() {


        return view("administracao.reqAposentadorias.reqVoluntaria.index");
    }

    public function create() {

        
        $sexo = Sexo::all();
        $marital_status = Marital_Status::all();
        $termo_aposentadoria = TermosAposentadoria::all();
        $termo_aposentadoria_responsavel = TermosAposentadoriaResponsavel::all();
        $vinculo_municipio = VinculoMunicipio::all();
        $orgao = Orgao::all();
        $funcao = Funcao::all();
        $city = City::all();

        return view("administracao.reqAposentadorias.reqVoluntaria.create",
                compact('sexo', 'marital_status', 'termo_aposentadoria','termo_aposentadoria_responsavel',
                        'vinculo_municipio','orgao','funcao','city'));
    }

    public function store(RequerimentoAposentadoriaVoluntariaFormRequest $request) {
        
        DB::beginTransaction();
        
        $reqApVoluntaria = RequerimentoAposentadoriaVoluntaria::create($request->all());
        
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


        
    

}
