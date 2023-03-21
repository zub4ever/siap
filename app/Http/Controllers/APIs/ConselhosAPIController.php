<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Conselhos\ConselhoDocumentos;
use App\Models\Conselhos\ConselhoAno;
use App\Models\Conselhos\ConselhoCategoria;
use App\Models\Conselhos\ConselhoTipo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class ConselhosAPIController extends Controller {

    public function index() {
        $conselhos = DB::table('conselho_documentos')
                ->join('conselho_tipo', 'conselho_documentos.conselho_tipo_id', '=', 'conselho_tipo.id')
                ->join('conselho_ano', 'conselho_documentos.conselho_ano_id', '=', 'conselho_ano.id')
                ->join('conselho_categoria', 'conselho_documentos.conselho_categoria_id', '=', 'conselho_categoria.id')
                ->join('users', 'conselho_documentos.users_id', '=', 'users.id')
                ->select('conselho_documentos.id', 'conselho_tipo.nm_tipo_conselho', 'conselho_ano.nm_ano', 'conselho_categoria.nm_categoria', 'users.name', 'conselho_documentos.descricao', 'conselho_documentos.pdf_path', 'conselho_documentos.created_at')
                ->get();

        foreach ($conselhos as $item) {
            $item->pdf_path = Storage::url($item->pdf_path);
        }

        return response()->json($conselhos);
    }

    public function index_caps() {
        $conselhos = DB::table('conselho_documentos')
                ->join('conselho_tipo', 'conselho_documentos.conselho_tipo_id', '=', 'conselho_tipo.id')
                ->join('conselho_ano', 'conselho_documentos.conselho_ano_id', '=', 'conselho_ano.id')
                ->join('conselho_categoria', 'conselho_documentos.conselho_categoria_id', '=', 'conselho_categoria.id')
                ->join('users', 'conselho_documentos.users_id', '=', 'users.id')
                ->where('conselho_documentos.conselho_tipo_id', '=', 1)
                ->select('conselho_documentos.id', 'conselho_tipo.nm_tipo_conselho', 'conselho_ano.nm_ano', 'conselho_categoria.nm_categoria', 'users.name', 'conselho_documentos.descricao', 'conselho_documentos.pdf_path', 'conselho_documentos.created_at')
                ->get();

        foreach ($conselhos as $item) {
            $item->pdf_path = Storage::url($item->pdf_path);
        }

        return response()->json($conselhos);
    }

    public function index_cofin() {
        $conselhos = DB::table('conselho_documentos')
                ->join('conselho_tipo', 'conselho_documentos.conselho_tipo_id', '=', 'conselho_tipo.id')
                ->join('conselho_ano', 'conselho_documentos.conselho_ano_id', '=', 'conselho_ano.id')
                ->join('conselho_categoria', 'conselho_documentos.conselho_categoria_id', '=', 'conselho_categoria.id')
                ->join('users', 'conselho_documentos.users_id', '=', 'users.id')
                ->where('conselho_documentos.conselho_tipo_id', '=', 2)
                ->select('conselho_documentos.id', 'conselho_tipo.nm_tipo_conselho', 'conselho_ano.nm_ano', 'conselho_categoria.nm_categoria', 'users.name', 'conselho_documentos.descricao', 'conselho_documentos.pdf_path', 'conselho_documentos.created_at')
                ->get();

        foreach ($conselhos as $item) {
            $item->pdf_path = Storage::url($item->pdf_path);
        }

        return response()->json($conselhos);
    }

    public function index_coin() {
        $conselhos = DB::table('conselho_documentos')
                ->join('conselho_tipo', 'conselho_documentos.conselho_tipo_id', '=', 'conselho_tipo.id')
                ->join('conselho_ano', 'conselho_documentos.conselho_ano_id', '=', 'conselho_ano.id')
                ->join('conselho_categoria', 'conselho_documentos.conselho_categoria_id', '=', 'conselho_categoria.id')
                ->join('users', 'conselho_documentos.users_id', '=', 'users.id')
                ->where('conselho_documentos.conselho_tipo_id', '=', 3)
                ->select('conselho_documentos.id', 'conselho_tipo.nm_tipo_conselho', 'conselho_ano.nm_ano', 'conselho_categoria.nm_categoria', 'users.name', 'conselho_documentos.descricao', 'conselho_documentos.pdf_path', 'conselho_documentos.created_at')
                ->get();

        foreach ($conselhos as $item) {
            $item->pdf_path = Storage::url($item->pdf_path);
        }

        return response()->json($conselhos);
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

}
