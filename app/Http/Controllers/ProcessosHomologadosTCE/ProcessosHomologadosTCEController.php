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

class ProcessosHomologadosTCEController extends Controller {

    public function index() {
        /*
          $conselhos = DB::table('conselho_documentos')
          ->join('conselho_tipo', 'conselho_documentos.conselho_tipo_id', '=', 'conselho_tipo.id')
          ->join('conselho_ano', 'conselho_documentos.conselho_ano_id', '=', 'conselho_ano.id')
          ->join('conselho_categoria', 'conselho_documentos.conselho_categoria_id', '=', 'conselho_categoria.id')
          ->join('users', 'conselho_documentos.users_id', '=', 'users.id')
          ->select('conselho_documentos.id', 'conselho_tipo.nm_tipo_conselho', 'conselho_ano.nm_ano', 'conselho_categoria.nm_categoria', 'users.name', 'conselho_documentos.descricao', 'conselho_documentos.pdf_path', 'conselho_documentos.created_at')
          ->get(); */

        return view("rbprevAtualizacoes.processosTCE.index");
    }

    /* public function showPdf($id) {
      //dd($id);
      $conselho = ConselhoDocumentos::findOrFail($id);

      $pdfPath = storage_path('app/public/' . $conselho->pdf_path);

      if (file_exists($pdfPath)) {
      $response = new \Illuminate\Http\Response(file_get_contents($pdfPath), 200, [
      'Content-Type' => 'application/pdf',
      'Content-Disposition' => 'inline; filename="' . $conselho->pdf_path . '"'
      ]);

      return $response;
      } else {
      abort(404, 'Arquivo não encontrado.');
      }
      } */

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

    public function destroy($id) {

        $conselho = ConselhoDocumentos::findOrFail($id);
        $pdf_path = $conselho->pdf_path;

        // Exclui o arquivo do storage
        Storage::delete($pdf_path);

        // Exclui o registro do banco de dados
        $conselho->delete();

        return redirect()->route('conselhos.index')->with('success', 'Arquivo excluído com sucesso!');
    }

}
