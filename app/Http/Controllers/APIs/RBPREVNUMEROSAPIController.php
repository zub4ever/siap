<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServeFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROS;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROSANO;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROSMES;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

//use App\Funcao;

class RBPREVNUMEROSAPIController extends Controller {

    public function index() {
        $rbprevNumeros = RBPREVNUMEROS::join('rbprev_numeros_ano', 'rbprev_numeros.rbprev_numeros_ano_id', '=', 'rbprev_numeros_ano.id')
                ->join('rbprev_numeros_mes', 'rbprev_numeros.rbprev_numeros_mes_id', '=', 'rbprev_numeros_mes.id')
                ->select('rbprev_numeros.id', 'rbprev_numeros_ano.nm_ano', 'rbprev_numeros_mes.nm_mes', 'rbprev_numeros.path_pdf')
                ->get();

        foreach ($rbprevNumeros as $item) {
            $item->path_pdf = Storage::url($item->path_pdf);
        }

        return response()->json($rbprevNumeros);
    }

    public function show($id) {


        $document = DB::table('rbprev_numeros')->where('id', $id)->first();
        $pdfPath = $document ? storage_path('app/public/' . $document->path_pdf) : null;
        //dd($pdfPath);
        if ($pdfPath && file_exists($pdfPath)) {
            $response = new Response(file_get_contents($pdfPath), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . basename($pdfPath) . '"',
            ]);

            return $response->header('Cache-Control', 'public')
                            ->header('Content-Transfer-Encoding', 'binary')
                            ->header('Content-Length', filesize($pdfPath));
        } else {
            return response()->json(['error' => 'Arquivo não encontrado para este ID.'], 404);
        }
    }

}
