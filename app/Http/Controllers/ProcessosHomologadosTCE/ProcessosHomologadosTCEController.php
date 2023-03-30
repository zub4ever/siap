<?php

namespace App\Http\Controllers\ProcessosHomologadosTCE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProcessosHomologadosTCE\ProcessosTCE;
use App\Models\ProcessosHomologadosTCE\TipoAposentadoria;
use App\Models\ProcessosHomologadosTCE\TipoPensao;
use App\Models\ProcessosHomologadosTCE\ProcessosTCEAno;
use App\Models\ProcessosHomologadosTCE\ProcessosTCEMes;
use App\Funcao;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;
use App\Http\Requests\ProcessosHomologadosTCE\ProcessosHomologadosTCEFormRequest;

class ProcessosHomologadosTCEController extends Controller {

    public function index() {

        $processos = DB::table('tce_processos_homologados')
                ->join('funcao', 'tce_processos_homologados.funcao_id', '=', 'funcao.id')
                ->leftJoin('tce_tipo_aposentadoria', 'tce_processos_homologados.tipo_aposentadoria_id', '=', 'tce_tipo_aposentadoria.id')
                ->leftJoin('tce_tipo_pensao', 'tce_processos_homologados.tipo_pensao_id', '=', 'tce_tipo_pensao.id')
                ->join('tce_ano', 'tce_processos_homologados.tce_ano_id', '=', 'tce_ano.id')
                ->join('tce_mes', 'tce_processos_homologados.tce_mes_id', '=', 'tce_mes.id')
                ->join('users', 'tce_processos_homologados.users_id', '=', 'users.id')
                ->select('tce_processos_homologados.id', 'tce_processos_homologados.nr_acordao', 'tce_processos_homologados.nm_assegurado', 'tce_processos_homologados.data_notificacao', 'tce_processos_homologados.data_diario_eletronico', 'funcao.nm_funcao', DB::raw('COALESCE(tce_tipo_aposentadoria.nm_aposentadoria, \'\') as nm_aposentadoria'), DB::raw('COALESCE(tce_tipo_pensao.nm_pensao, \'\') as nm_pensao'), 'tce_ano.nm_ano', 'tce_mes.nm_mes', 'users.name')
                ->get();

        //dd($processos);
        return view("rbprevAtualizacoes.processosTCE.index", compact('processos'));
    }

    public function showPdf() {
        
        $processos = DB::table('tce_processos_homologados')
                ->join('funcao', 'tce_processos_homologados.funcao_id', '=', 'funcao.id')
                ->leftJoin('tce_tipo_aposentadoria', 'tce_processos_homologados.tipo_aposentadoria_id', '=', 'tce_tipo_aposentadoria.id')
                ->leftJoin('tce_tipo_pensao', 'tce_processos_homologados.tipo_pensao_id', '=', 'tce_tipo_pensao.id')
                ->join('tce_ano', 'tce_processos_homologados.tce_ano_id', '=', 'tce_ano.id')
                ->join('tce_mes', 'tce_processos_homologados.tce_mes_id', '=', 'tce_mes.id')
                ->join('users', 'tce_processos_homologados.users_id', '=', 'users.id')
                ->select('tce_processos_homologados.id', 'tce_processos_homologados.nr_acordao', 'tce_processos_homologados.nm_assegurado', 'tce_processos_homologados.data_notificacao', 'tce_processos_homologados.data_diario_eletronico', 'funcao.nm_funcao', DB::raw('COALESCE(tce_tipo_aposentadoria.nm_aposentadoria, \'\') as nm_aposentadoria'), DB::raw('COALESCE(tce_tipo_pensao.nm_pensao, \'\') as nm_pensao'), 'tce_ano.nm_ano', 'tce_mes.nm_mes', 'users.name')
                ->get();
        
        
        
       return PDF::loadView('rbprevAtualizacoes.processosTCE.pdf.showpdf', compact('processos'))
                        ->setPaper('A4', "landscape")
                        // Altera o papel para modo paisagem.  "landscape"
                        //Altera o papel para modo Retrato.    'portrait'
                        ->stream('relatorio_tce.pdf');
    }

    public function create() {
        //
        $processo_ano = ProcessosTCEAno::all();
        $processo_mes = ProcessosTCEMes::all();
        $tipo_pensao = TipoPensao::all();
        $tipo_aposentadoria = TipoAposentadoria::all();
        $funcao = Funcao::all();

        return view("rbprevAtualizacoes.processosTCE.create", compact('processo_ano', 'processo_mes', 'tipo_pensao', 'tipo_aposentadoria', 'funcao'));
    }

    public function store(Request $request) {
        DB::beginTransaction();

        // obter o usuário logado
        $user = auth()->user();

        // criar um novo ProcessosTCE com o usuário logado
        $processos = new ProcessosTCE($request->all());
        $processos->users_id = $user->id;
        $processos->save();

        if (!$processos) {
            DB::rollBack();
            return redirect()->route('processosTCE.index')->with('error', "Falha ao cadastrar um ProcessosTCE.");
        }

        DB::commit();

        return redirect()->route('processosTCE.index')->with(
                        'success',
                        "ProcessosTCE cadastrado com sucesso."
        );
    }

    public function edit($id) {

        $processos = ProcessosTCE::findOrFail($id);

        $processo_ano = ProcessosTCEAno::get();
        $processo_mes = ProcessosTCEMes::get();
        $tipo_pensao = TipoPensao::get();
        $tipo_aposentadoria = TipoAposentadoria::get();
        $funcao = Funcao::get();
        return view('rbprevAtualizacoes.processosTCE.edit', compact(
                        'processos', 'processo_ano', 'processo_mes', 'tipo_pensao', 'tipo_aposentadoria', 'funcao'
        ));
    }

    public function update(ProcessosHomologadosTCEFormRequest $request, $id) {

        $processos = ProcessosTCE::findOrFail($id);

        DB::beginTransaction();

        if (!$processos->update($request->all())) {

            DB::rollBack();
            return redirect()->route('processosTCE.index')->with('error', "Falha na alteração do Processo.");
        }

        DB::commit();

        return redirect()->route('processosTCE.index')->with(
                        'success',
                        "Processo alterado com sucesso."
        );
    }

    public function destroy($id) {

        $processo = ProcessosTCE::findOrFail($id);
        // Exclui o registro do banco de dados
        $processo->delete();

        return redirect()->route('processosTCE.index')->with('success', 'Processo excluído com sucesso!');
    }

}
