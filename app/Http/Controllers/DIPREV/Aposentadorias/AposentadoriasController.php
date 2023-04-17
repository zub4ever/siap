<?php

namespace App\Http\Controllers\DIPREV\Aposentadorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Serve;
use App\Funcao;
use App\User;
use App\Models\DIPREV\Aposentadorias\Aposentadorias;
use App\Models\DIPREV\Aposentadorias\RegrasdeAposentadoria;
use App\Models\DIPREV\Aposentadorias\TipodeAposentadorias;
use Illuminate\Support\Facades\DB;
use PDF;

class AposentadoriasController extends Controller {

    public function index() {

        //$aposentadorias = DB::table('aposentadorias_concedidas')->get();

        $aposentadorias = DB::table('aposentadorias_concedidas')
                ->join('serve', 'aposentadorias_concedidas.serve_id', '=', 'serve.id')
                ->join('funcao', 'aposentadorias_concedidas.funcao_id', '=', 'funcao.id')
                ->join('users', 'aposentadorias_concedidas.users_id', '=', 'users.id')
                ->join('regras_aposentadoria', 'aposentadorias_concedidas.regras_aposentadoria_id', '=', 'regras_aposentadoria.id')
                ->join('tipo_de_aposentadoria', 'aposentadorias_concedidas.tipo_de_aposentadoria_id', '=', 'tipo_de_aposentadoria.id')
                ->select('aposentadorias_concedidas.id', 'aposentadorias_concedidas.nr_processo',
                        'aposentadorias_concedidas.nr_protocolo',
                        'aposentadorias_concedidas.nr_portaria',
                        'aposentadorias_concedidas.nr_diario',
                        'aposentadorias_concedidas.data_aposentadoria',
                        'aposentadorias_concedidas.data_diario_oficial',
                        'serve.nm_servidor',
                        'serve.matricula',
                        'users.name',
                        'funcao.nm_funcao',
                        'regras_aposentadoria.nm_regra',
                        'tipo_de_aposentadoria.nm_aposentadoria')
                ->get();

        //dd($aposentadorias);


        return view("diprev.aposentadorias.index", compact('aposentadorias'));
    }

    public function create() {

        $servidor = Serve::all();
        $funcao = Funcao::all();
        $regra = RegrasdeAposentadoria::all();
        $tipo_aposentadoria = TipodeAposentadorias::all();

        return view('diprev.aposentadorias.create', compact('servidor', 'funcao', 'regra', 'tipo_aposentadoria'));
    }

    public function edit($id) {
        $aposentadorias = Aposentadorias::findOrFail($id);

       $servidor = Serve::all();
        $funcao = Funcao::all();
        $regra = RegrasdeAposentadoria::all();
        $tipo_aposentadoria = TipodeAposentadorias::all();

        return view('diprev.aposentadorias.edit', compact('aposentadorias', 'servidor', 'funcao', 'regra', 'tipo_aposentadoria'));
    }

    public function update(Request $request, $id) {
        $aposentadorias = Aposentadorias::findOrFail($id);

        DB::beginTransaction();

        if (!$aposentadorias->update($request->all())) {

            DB::rollBack();
            return redirect()->route('aposentadorias.index')->with('error', "Falha em alterar a Aposentadoria.");
        }

        DB::commit();

        return redirect()->route('aposentadorias.index')->with(
                        'success',
                        "Aposentadoria alterada com sucesso."
        );
    }

    public function store(Request $request) {

        //dd($request);
        DB::beginTransaction();

        // obter o usuário logado
        $user = auth()->user();

        // criar um novo ProcessosTCE com o usuário logado
        $aposentadorias = new Aposentadorias($request->all());
        $aposentadorias->users_id = $user->id;
        $aposentadorias->save();

        if (!$aposentadorias) {
            DB::rollBack();
            return redirect()->route('aposentadorias.index')->with('error', "Falha ao cadastrar uma aposentadoria.");
        }

        DB::commit();

        return redirect()->route('aposentadorias.index')->with(
                        'success',
                        "Aposentadoria cadastrada com sucesso."
        );
    }

    public function destroy($id) {

        $aposentadorias = Aposentadorias::findOrFail($id);
        // Exclui o registro do banco de dados
        $aposentadorias->delete();

        return redirect()->route('aposentadorias.index')->with('success', 'Aposentadoria excluída com sucesso!');
    }

}
