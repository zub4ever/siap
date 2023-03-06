<?php

namespace App\Http\Controllers\DIPREV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Serve;
use App\Origin;
use App\Funcao;
use App\Orgao;
use App\Sexo;
use App\Contract;
use App\Models\DIPREV\CTC\CTC;
use App\Models\DIPREV\CTC\TipoCertidao;
use App\Http\Requests\DiprevFormRequest\CTC\CTCFormRequest;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\DIPREV\CTC\CTCDeducao;
use Illuminate\Support\Facades\Validator;

class CTCDeducaoController extends Controller {

    public function edit($id) {


        $registros = CTCDeducao::findOrFail($id);

        return view('diprev.ctc.deducao.edit', compact('registros'));
    }

    public function update(Request $request, $id) {

        $registros = CTCDeducao::find($id);

        $validatedData = $request->validate([
            'faltas' => 'required|integer',
            'licencas' => 'required|integer',
            'licencas_sem_vencimento' => 'required|integer',
            'suspensoes' => 'required|integer',
            'disponibilidade' => 'required|integer',
            'outras' => 'required|integer',
        ]);

        $faltas = $validatedData['faltas'];
        $licencas = $validatedData['licencas'];
        $licencas_sem_vencimento = $validatedData['licencas_sem_vencimento'];
        $suspensoes = $validatedData['suspensoes'];
        $disponibilidade = $validatedData['disponibilidade'];
        $outras = $validatedData['outras'];

        if ($registros) {
            $registros->update($validatedData);

            $tempo_liquido = $registros->tempo_bruto - ($faltas + $licencas + $licencas_sem_vencimento + $suspensoes + $disponibilidade + $outras);

            $registros->tempo_liquido = $tempo_liquido;
            $registros->save();

            return redirect()->route('ctc.show', ['id' => $registros->ctc_certidao_id])->with(
                        'success',
                        "Dedução realizada com sucesso."
        );


        } else {
            return response()->json(['message' => 'Dedução não encontrada.'], 404);
        }
    }

}
