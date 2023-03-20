<?php

namespace App\Http\Controllers\Conselhos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conselhos\ConselhoDocumentos;
use App\Models\Conselhos\ConselhoAno;
use App\Models\Conselhos\ConselhoCategoria;
use App\Models\Conselhos\ConselhoTipo;

class ConselhosController extends Controller {

    public function index() {


        return view("rbprevAtualizacoes.conselhos.index");
    }

    private function getTiposConselho() {
        return ConselhoTipo::all();
    }

    private function getAnosConselho() {
        return ConselhoAno::all();
    }

    private function getCategoriasConselho() {
        return ConselhoCategoria::all();
    }

    public function upload(Request $request) {
        $request->validate([
            'conselho_tipo_id' => 'required|integer',
            'conselho_ano_id' => 'required|integer',
            'conselho_categoria_id' => 'required|integer',
            'arquivo' => 'required|mimes:pdf'
        ]);

        $arquivo = $request->file('arquivo');
        $nomeArquivo = $arquivo->getClientOriginalName();
        $caminhoArquivo = $arquivo->store('conselhos');

        $conselhoDocumento = new ConselhoDocumento();
        $conselhoDocumento->conselho_tipo_id = $request->conselho_tipo_id;
        $conselhoDocumento->conselho_ano_id = $request->conselho_ano_id;
        $conselhoDocumento->conselho_categoria_id = $request->conselho_categoria_id;
        $conselhoDocumento->nome_arquivo = $nomeArquivo;
        $conselhoDocumento->caminho_arquivo = $caminhoArquivo;
        $conselhoDocumento->save();

        return redirect()->route('conselhos.up')->with('success', 'Arquivo enviado com sucesso.');
    }

}
