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

class CTCDeducaoController extends Controller {

    public function update(Request $request, $id) {

        $ctc_certidao = CTC::find($id);

        if (!$ctc_certidao) {
            return response()->json(['message' => 'Certidão não encontrada.'], 404);
        }

        $ctc_certidao_deducao = CTCDeducao::where('ctc_certidao_id', $ctc_certidao->id)->first();

        if (!$ctc_certidao_deducao) {
            return response()->json(['message' => 'Dedução não encontrada.'], 404);
        }


        $validatedData = $request->validate([
            'ano' => 'required|integer',
            'faltas' => 'nullable|integer',
            'licencas' => 'nullable|integer',
            'licencas_sem_vencimento' => 'nullable|integer',
            'suspensoes' => 'nullable|integer',
            'disponibilidade' => 'nullable|integer',
            'outras' => 'nullable|integer'
        ]);

        $ano = $validatedData['ano'];
        $ctc_certidao_id = $ctc_certidao_deducao->ctc_certidao_id;

        $deducoes = CTCDeducao::where('ctc_certidao_id', $ctc_certidao_id)
                ->where('ano', $ano)
                ->get();

        if ($deducoes->isEmpty()) {
            return response()->json(['message' => 'Dedução não encontrada.'], 404);
        }

        $faltas = $deducoes->sum('faltas');
        $licencas = $deducoes->sum('licencas');
        $licencas_sem_vencimento = $deducoes->sum('licencas_sem_vencimento');
        $suspensoes = $deducoes->sum('suspensoes');
        $disponibilidade = $deducoes->sum('disponibilidade');
        $outras = $deducoes->sum('outras');

        $ctc_certidao_deducao->update($validatedData);

        $tempo_liquido = $ctc_certidao_deducao->tempo_bruto - ($faltas + $licencas + $licencas_sem_vencimento + $suspensoes + $disponibilidade + $outras);

        $ctc_certidao_deducao->tempo_liquido = $tempo_liquido;
        $ctc_certidao_deducao->save();

        return response()->json(['message' => 'Dedução atualizada com sucesso.'], 200);
    }

}
