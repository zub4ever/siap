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
use App\Models\DIPREV\CTC\CTCVerso;
use App\Models\DIPREV\CTC\CTCCertidao;
use Illuminate\Support\Facades\Validator;

class CTCVersoController extends Controller {

    public function verso($id) {
        $ctc_certidao = CTC::findOrFail($id);

        $registros = CTCVerso::select('ctc_verso.*')
                ->join('ctc_certidao', 'ctc_verso.ctc_certidao_id', '=', 'ctc_certidao.id')
                ->where('ctc_certidao.id', '=', $id)
                ->get();

        return view('diprev.ctc.verso.verso', compact('registros', 'ctc_certidao'));
    }

    public function edit($id) {
        $ctc_certidao = CTC::findOrFail($id);

        $ctc_verso = CTCVerso::join('ctc_certidao', 'ctc_verso.ctc_certidao_id', '=', 'ctc_certidao.id')
                ->where('ctc_certidao.id', $id)
                ->select('ctc_verso.*')
                ->firstOrFail();

        return view('diprev.ctc.verso.edit', compact('ctc_certidao', 'ctc_verso'));
    }

    public function update(Request $request, $id) {
        $ctc_verso = CTCVerso::findOrFail($id);

        // Operação 1
        $inicio1 = $request->input('tempo_bruto_inicio_1');
        $fim1 = $request->input('tempo_bruto_fim_1');
        $ocorrencia1 = $request->input('id_ocorrencia_1');

        // Verifique se algum dos campos está vazio
        if (!empty($inicio1) && !empty($fim1) && !empty($ocorrencia1)) {
            $inicio1 = \DateTime::createFromFormat('d/m/Y', $inicio1);
            $fim1 = \DateTime::createFromFormat('d/m/Y', $fim1);

            if ($inicio1 !== false && $fim1 !== false) {
                $intervalo1 = $inicio1->diff($fim1);
                $dias1 = $intervalo1->days;

                // Atualiza o BD 
                $ctc_verso->tempo_bruto_inicio_1 = $inicio1->format('Y-m-d');
                $ctc_verso->tempo_bruto_fim_1 = $fim1->format('Y-m-d');
                $ctc_verso->tempo_bruto_dias_1 = $dias1 + 1;
                $ctc_verso->id_ocorrencia_1 = $ocorrencia1;
            } else {
                // Trate o erro na criação dos objetos DateTime para a Operação 1
            }
        } else {
            // Passe para a próxima operação ou trate o erro nos valores dos inputs para a Operação 1
        }

        // Operação 2
        $inicio2 = $request->input('tempo_bruto_inicio_2');
        $fim2 = $request->input('tempo_bruto_fim_2');
        $ocorrencia2 = $request->input('id_ocorrencia_2');

        // Verifique se algum dos campos está vazio
        if (!empty($inicio2) && !empty($fim2) && !empty($ocorrencia2)) {
            $inicio2 = \DateTime::createFromFormat('d/m/Y', $inicio2);
            $fim2 = \DateTime::createFromFormat('d/m/Y', $fim2);

            if ($inicio2 !== false && $fim2 !== false) {
                $intervalo2 = $inicio2->diff($fim2);
                $dias2 = $intervalo2->days;

                // Atualize o modelo CTCVerso com os valores calculados
                $ctc_verso->tempo_bruto_inicio_2 = $inicio2->format('Y-m-d');
                $ctc_verso->tempo_bruto_fim_2 = $fim2->format('Y-m-d');
                $ctc_verso->tempo_bruto_dias_2 = $dias2 + 1;
                $ctc_verso->id_ocorrencia_2 = $ocorrencia2;
            } else {
                // Trate o erro na criação dos objetos DateTime para a Operação 2
            }
        } else {
            // Passe para a próxima operação ou trate o erro nos valores dos inputs para a Operação 2
        }

        
        $ctc_verso->save();

        return redirect()->route('verso.show', ['id' => $ctc_verso->ctc_certidao_id])->with(
                        'success',
                        "Tabela atualizada com sucesso."
        );
    }
}
