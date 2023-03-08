<?php

namespace App\Http\Controllers\RBPREVNUMEROS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROS;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROSMES;
use App\Models\RBPREVNUMEROS\RBPREVNUMEROSANO;
use App\Http\Requests\RBPREVNUMEROSFormRequest\RBPREVNUMEROSFormRequest;
use DB;
use Illuminate\Support\Facades\Storage;

class RBPREVNumerosController extends Controller {

    public function index() {

        $rbprev_numeros = DB::table('rbprev_numeros')
                ->join('rbprev_numeros_mes', 'rbprev_numeros.rbprev_numeros_mes_id', '=', 'rbprev_numeros_mes.id')
                ->join('rbprev_numeros_ano', 'rbprev_numeros.rbprev_numeros_ano_id', '=', 'rbprev_numeros_ano.id')
                ->select('rbprev_numeros.*', 'rbprev_numeros_mes.nm_mes', 'rbprev_numeros_ano.nm_ano')
                ->get();

        return view("rbprevAtualizacoes.rbprevNumeros.index", compact('rbprev_numeros'));
    }

    public function create() {

        $rbprev_numeros_mes = RBPREVNUMEROSMES::all();
        $rbprev_numeros_ano = RBPREVNUMEROSANO::all();

        return view("rbprevAtualizacoes.rbprevNumeros.create", compact('rbprev_numeros_mes', 'rbprev_numeros_ano'));
    }

    public function store(RBPREVNUMEROSFormRequest $request) {





        $pdf = $request->file('path_pdf');
        if ($request->hasFile('path_pdf') && $pdf->isValid()) {
            $path = Storage::putFile('rbprev_numero', $pdf);
            $filename = 'rbprev_numero' . uniqid();

            DB::table('rbprev_numeros')->insert([
                'path_pdf' => $path,
                'rbprev_numeros_mes_id' => $request->rbprev_numeros_mes_id,
                'rbprev_numeros_ano_id' => $request->rbprev_numeros_ano_id,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('rbprevNumeros.index')->with('success', 'Arquivo enviado com sucesso!');
        } else {
            return redirect()->back()->withInput()->withErrors(['path_pdf' => 'O arquivo enviado é inválido']);
        }
    }

    public function destroy($id) {
        
        $rbprev_numero = RBPREVNUMEROS::findOrFail($id);
        $path_pdf = $rbprev_numero->path_pdf;

        // Exclui o arquivo do storage
        Storage::delete($path_pdf);

        // Exclui o registro do banco de dados
        $rbprev_numero->delete();

        return redirect()->route('rbprevNumeros.index')->with('success', 'Arquivo excluído com sucesso!');
    }

}
