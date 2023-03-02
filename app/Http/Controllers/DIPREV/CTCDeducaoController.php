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

    public function update(Request $request, $id, $ano) {

        $ctc_certidao = CTCDeducao::find($id);

        if (!$ctc_certidao) {
            return response()->json(['message' => 'Certidão não encontrada.'], 404);
        }

        $deducao = CTCDeducao::where('ctc_certidao_id', $ctc_certidao)->where('ano', $ano)->first();

        if (!$ctc_certidao_deducao) {
            return response()->json(['message' => 'Dedução não encontrada.'], 404);
        }




        $ctc_certidao_id = $ctc_certidao_deducao->ctc_certidao_id;

        $deducoes = CTCDeducao::where('ctc_certidao_id', $ctc_certidao_id)
                ->where('ano', $ano)
                ->get();

        //dd($deducoes);

        if ($deducoes->isEmpty()) {
            return response()->json(['message' => 'Dedução não encontrada.'], 404);
        }

        $faltas = $deducoes->sum('faltas');
        $licencas = $deducoes->sum('licencas');
        $licencas_sem_vencimento = $deducoes->sum('licencas_sem_vencimento');
        $suspensoes = $deducoes->sum('suspensoes');
        $disponibilidade = $deducoes->sum('disponibilidade');
        $outras = $deducoes->sum('outras');

        if ($deducao) {
            $deducao->update($validatedData);

            $tempo_liquido = $deducao->tempo_bruto - ($deducao->faltas + $deducao->licencas + $deducao->licencas_sem_vencimento + $deducao->suspensoes + $deducao->disponibilidade + $deducao->outras);

            $deducao->tempo_liquido = $tempo_liquido;
            $deducao->save();

            return response()->json(['message' => 'Dedução atualizada com sucesso.'], 200);
        } else {
            return response()->json(['message' => 'Dedução não encontrada.'], 404);
        }
    }

}
