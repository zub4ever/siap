<?php

namespace App\Http\Controllers\Conselhos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conselhos\ConselhoDocumentos;
use App\Models\Conselhos\ConselhoAno;
use App\Models\Conselhos\ConselhoCategoria;
use App\Models\Conselhos\ConselhoTipo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use DB;

class ConselhosController extends Controller {

    public function index() {
        $conselhos = DB::table('conselho_documentos')
                ->join('conselho_tipo', 'conselho_documentos.conselho_tipo_id', '=', 'conselho_tipo.id')
                ->join('conselho_ano', 'conselho_documentos.conselho_ano_id', '=', 'conselho_ano.id')
                ->join('conselho_categoria', 'conselho_documentos.conselho_categoria_id', '=', 'conselho_categoria.id')
                ->join('users', 'conselho_documentos.users_id', '=', 'users.id')
                ->select('conselho_documentos.id', 'conselho_tipo.nm_tipo_conselho', 'conselho_ano.nm_ano', 'conselho_categoria.nm_categoria', 'users.name', 'conselho_documentos.descricao', 'conselho_documentos.pdf_path', 'conselho_documentos.created_at')
                ->get();

        return view("rbprevAtualizacoes.conselhos.index", compact('conselhos'));
    }

    public function showPdf($id) {
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
    }

    public function create() {
        $tiposConselho = ConselhoTipo::all();
        $anosConselho = ConselhoAno::all();
        $categoriasConselho = ConselhoCategoria::all();

        return view("rbprevAtualizacoes.conselhos.create", compact('tiposConselho', 'anosConselho', 'categoriasConselho'));
    }

    public function upload(Request $request) {

        $request->validate([
            'conselho_tipo_id' => 'required|integer',
            'conselho_ano_id' => 'required|integer',
            'conselho_categoria_id' => 'required|integer',
            'descricao' => 'required|max:200',
            'pdf_path' => 'required|mimes:pdf'
        ]);

        $arquivo = $request->file('pdf_path');
        $nomeArquivo = $arquivo->getClientOriginalName();
        $caminhoArquivo = $arquivo->store('pdf_conselhos');

        $conselhoDocumento = new ConselhoDocumentos();
        $conselhoDocumento->conselho_tipo_id = $request->conselho_tipo_id;
        $conselhoDocumento->conselho_ano_id = $request->conselho_ano_id;
        $conselhoDocumento->conselho_categoria_id = $request->conselho_categoria_id;
        $conselhoDocumento->descricao = $request->descricao;
        $conselhoDocumento->pdf_path = $nomeArquivo;
        $conselhoDocumento->pdf_path = $caminhoArquivo;
        $conselhoDocumento->users_id = Auth::id(); //salvando o id do usuário logado
        $conselhoDocumento->save();

        return redirect()->route('conselhos.index')->with('success', 'Arquivo enviado com sucesso.');
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
