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

        $tempo_bruto_inicio_1 = $request->input('tempo_bruto_inicio_1');
        $tempo_bruto_fim_1 = $request->input('tempo_bruto_fim_1');
        $tempo_bruto_inicio_2 = $request->input('tempo_bruto_inicio_2');
        $tempo_bruto_fim_2 = $request->input('tempo_bruto_fim_2');

        $tempo_bruto_inicio_1 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_inicio_1);
        $tempo_bruto_fim_1 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_fim_1);
        $tempo_bruto_dias_1 = $tempo_bruto_inicio_1->diffInDays($tempo_bruto_fim_1);
        //2
        $tempo_bruto_inicio_2 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_inicio_2);
        $tempo_bruto_fim_2 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_fim_2);
        $tempo_bruto_dias_2 = $tempo_bruto_inicio_2->diffInDays($tempo_bruto_fim_2);

        $tempo_bruto_inicio_3 = $request->input('tempo_bruto_inicio_3');
        $tempo_bruto_fim_3 = $request->input('tempo_bruto_fim_3');

        if ($tempo_bruto_inicio_3 && $tempo_bruto_fim_3) {
            $tempo_bruto_inicio_3 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_inicio_3);
            $tempo_bruto_fim_3 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_fim_3);
            $tempo_bruto_dias_3 = $tempo_bruto_inicio_3->diffInDays($tempo_bruto_fim_3);
        } else {
            $tempo_bruto_inicio_3 = null;
            $tempo_bruto_fim_3 = null;
            $tempo_bruto_dias_3 = null;
        }

        $ctc_verso->tempo_bruto_inicio_3 = $tempo_bruto_inicio_3;
        $ctc_verso->tempo_bruto_fim_3 = $tempo_bruto_fim_3;
        $ctc_verso->tempo_bruto_dias_3 = $tempo_bruto_dias_3;
        $ctc_verso->id_ocorrencia_3 = $request->input('id_ocorrencia_3');

        $tempo_bruto_inicio_4 = $request->input('tempo_bruto_inicio_4');
        $tempo_bruto_fim_4 = $request->input('tempo_bruto_fim_4');

        if ($tempo_bruto_inicio_4 && $tempo_bruto_fim_4) {
            $tempo_bruto_inicio_4 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_inicio_4);
            $tempo_bruto_fim_4 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_fim_4);
            $tempo_bruto_dias_4 = $tempo_bruto_inicio_4->diffInDays($tempo_bruto_fim_4);
        } else {
            $tempo_bruto_inicio_4 = null;
            $tempo_bruto_fim_4 = null;
            $tempo_bruto_dias_4 = null;
        }

        $ctc_verso->tempo_bruto_inicio_4 = $tempo_bruto_inicio_4;
        $ctc_verso->tempo_bruto_fim_4 = $tempo_bruto_fim_4;
        $ctc_verso->tempo_bruto_dias_4 = $tempo_bruto_dias_4;
        $ctc_verso->id_ocorrencia_4 = $request->input('id_ocorrencia_4');

        $tempo_bruto_inicio_5 = $request->input('tempo_bruto_inicio_5');
        $tempo_bruto_fim_5 = $request->input('tempo_bruto_fim_5');

        if ($tempo_bruto_inicio_5 && $tempo_bruto_fim_5) {
            $tempo_bruto_inicio_5 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_inicio_5);
            $tempo_bruto_fim_5 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_fim_5);
            $tempo_bruto_dias_5 = $tempo_bruto_inicio_5->diffInDays($tempo_bruto_fim_5);
        } else {
            $tempo_bruto_inicio_5 = null;
            $tempo_bruto_fim_5 = null;
            $tempo_bruto_dias_5 = null;
        }

        $ctc_verso->tempo_bruto_inicio_5 = $tempo_bruto_inicio_5;
        $ctc_verso->tempo_bruto_fim_5 = $tempo_bruto_fim_5;
        $ctc_verso->tempo_bruto_dias_5 = $tempo_bruto_dias_5;
        $ctc_verso->id_ocorrencia_5 = $request->input('id_ocorrencia_5');

        $tempo_bruto_inicio_6 = $request->input('tempo_bruto_inicio_6');
        $tempo_bruto_fim_6 = $request->input('tempo_bruto_fim_6');

        if ($tempo_bruto_inicio_6 && $tempo_bruto_fim_6) {
            $tempo_bruto_inicio_6 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_inicio_6);
            $tempo_bruto_fim_6 = Carbon::createFromFormat('d/m/Y', $tempo_bruto_fim_6);
            $tempo_bruto_dias_6 = $tempo_bruto_inicio_6->diffInDays($tempo_bruto_fim_6);
        } else {
            $tempo_bruto_inicio_6 = null;
            $tempo_bruto_fim_6 = null;
            $tempo_bruto_dias_6 = null;
        }
        $ctc_verso->tempo_bruto_inicio_6 = $tempo_bruto_inicio_6;
        $ctc_verso->tempo_bruto_fim_6 = $tempo_bruto_fim_6;
        $ctc_verso->tempo_bruto_dias_6 = $tempo_bruto_dias_6;
        $ctc_verso->id_ocorrencia_6 = $request->input('id_ocorrencia_6');
        //TempoBruto 
        $ctc_verso->tempo_bruto_inicio_1 = $tempo_bruto_inicio_1;
        $ctc_verso->tempo_bruto_fim_1 = $tempo_bruto_fim_1;
        $ctc_verso->tempo_bruto_dias_1 = $tempo_bruto_dias_1;
        $ctc_verso->id_ocorrencia_1 = $request->input('id_ocorrencia_1');
        //2Bruto
        $ctc_verso->tempo_bruto_inicio_2 = $tempo_bruto_inicio_2;
        $ctc_verso->tempo_bruto_fim_2 = $tempo_bruto_fim_2;
        $ctc_verso->tempo_bruto_dias_2 = $tempo_bruto_dias_2;
        $ctc_verso->id_ocorrencia_2 = $request->input('id_ocorrencia_2');

        //Tabela B - Tempo Especial

        $tempo_especial_inicio_1 = $request->input('tempo_especial_inicio_1');
        $tempo_especial_fim_1 = $request->input('tempo_especial_fim_1');

        if ($tempo_especial_inicio_1 && $tempo_especial_fim_1) {
            $tempo_especial_inicio_1 = Carbon::createFromFormat('d/m/Y', $tempo_especial_inicio_1);
            $tempo_especial_fim_1 = Carbon::createFromFormat('d/m/Y', $tempo_especial_fim_1);
            $tempo_especial_dias_1 = $tempo_especial_inicio_1->diffInDays($tempo_especial_fim_1);
        } else {
            $tempo_especial_inicio_1 = null;
            $tempo_especial_fim_1 = null;
            $tempo_especial_dias_1 = null;
        }

        $ctc_verso->tempo_especial_inicio_1 = $tempo_especial_inicio_1;
        $ctc_verso->tempo_especial_fim_1 = $tempo_especial_fim_1;
        $ctc_verso->tempo_especial_dias_1 = $tempo_especial_dias_1;

        //2
        $tempo_especial_inicio_2 = $request->input('tempo_especial_inicio_2');
        $tempo_especial_fim_2 = $request->input('tempo_especial_fim_2');

        if ($tempo_especial_inicio_2 && $tempo_especial_fim_2) {
            $tempo_especial_inicio_2 = Carbon::createFromFormat('d/m/Y', $tempo_especial_inicio_2);
            $tempo_especial_fim_2 = Carbon::createFromFormat('d/m/Y', $tempo_especial_fim_2);
            $tempo_especial_dias_2 = $tempo_especial_inicio_2->diffInDays($tempo_especial_fim_2);
        } else {
            $tempo_especial_inicio_2 = null;
            $tempo_especial_fim_2 = null;
            $tempo_especial_dias_2 = null;
        }

        $ctc_verso->tempo_especial_inicio_2 = $tempo_especial_inicio_2;
        $ctc_verso->tempo_especial_fim_2 = $tempo_especial_fim_2;
        $ctc_verso->tempo_especial_dias_2 = $tempo_especial_dias_2;

//3
        $tempo_especial_inicio_3 = $request->input('tempo_especial_inicio_3');
        $tempo_especial_fim_3 = $request->input('tempo_especial_fim_3');

        if ($tempo_especial_inicio_3 && $tempo_especial_fim_3) {
            $tempo_especial_inicio_3 = Carbon::createFromFormat('d/m/Y', $tempo_especial_inicio_3);
            $tempo_especial_fim_3 = Carbon::createFromFormat('d/m/Y', $tempo_especial_fim_3);
            $tempo_especial_dias_3 = $tempo_especial_inicio_3->diffInDays($tempo_especial_fim_3);
        } else {
            $tempo_especial_inicio_3 = null;
            $tempo_especial_fim_3 = null;
            $tempo_especial_dias_3 = null;
        }

        $ctc_verso->tempo_especial_inicio_3 = $tempo_especial_inicio_3;
        $ctc_verso->tempo_especial_fim_3 = $tempo_especial_fim_3;
        $ctc_verso->tempo_especial_dias_3 = $tempo_especial_dias_3;

//4
        $tempo_especial_inicio_4 = $request->input('tempo_especial_inicio_4');
        $tempo_especial_fim_4 = $request->input('tempo_especial_fim_4');

        if ($tempo_especial_inicio_4 && $tempo_especial_fim_4) {
            $tempo_especial_inicio_4 = Carbon::createFromFormat('d/m/Y', $tempo_especial_inicio_4);
            $tempo_especial_fim_4 = Carbon::createFromFormat('d/m/Y', $tempo_especial_fim_4);
            $tempo_especial_dias_4 = $tempo_especial_inicio_4->diffInDays($tempo_especial_fim_4);
        } else {
            $tempo_especial_inicio_4 = null;
            $tempo_especial_fim_4 = null;
            $tempo_especial_dias_4 = null;
        }

        $ctc_verso->tempo_especial_inicio_4 = $tempo_especial_inicio_4;
        $ctc_verso->tempo_especial_fim_4 = $tempo_especial_fim_4;
        $ctc_verso->tempo_especial_dias_4 = $tempo_especial_dias_4;
        //Tabela C - Magisterio


        $tempo_magisterio_incio_1 = $request->input('tempo_magisterio_incio_1');
        $tempo_magisterio_fim_1 = $request->input('tempo_magisterio_fim_1');

        if ($tempo_magisterio_incio_1 && $tempo_magisterio_fim_1) {
            $tempo_magisterio_incio_1 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_incio_1);
            $tempo_magisterio_fim_1 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_fim_1);
            $tempo_magisterio_dias_1 = $tempo_magisterio_incio_1->diffInDays($tempo_magisterio_fim_1);
        } else {
            $tempo_magisterio_incio_1 = null;
            $tempo_magisterio_fim_1 = null;
            $tempo_magisterio_dias_1 = null;
        }

        $ctc_verso->tempo_magisterio_incio_1 = $tempo_magisterio_incio_1;
        $ctc_verso->tempo_magisterio_fim_1 = $tempo_magisterio_fim_1;
        $ctc_verso->tempo_magisterio_dias_1 = $tempo_magisterio_dias_1;

        //2
        $tempo_magisterio_incio_2 = $request->input('tempo_magisterio_incio_2');
        $tempo_magisterio_fim_2 = $request->input('tempo_magisterio_fim_2');

        if ($tempo_magisterio_incio_2 && $tempo_magisterio_fim_2) {
            $tempo_magisterio_incio_2 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_incio_2);
            $tempo_magisterio_fim_2 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_fim_2);
            $tempo_magisterio_dias_2 = $tempo_magisterio_incio_2->diffInDays($tempo_magisterio_fim_2);
        } else {
            $tempo_magisterio_incio_2 = null;
            $tempo_magisterio_fim_2 = null;
            $tempo_magisterio_dias_2 = null;
        }

        $ctc_verso->tempo_magisterio_incio_2 = $tempo_magisterio_incio_2;
        $ctc_verso->tempo_magisterio_fim_2 = $tempo_magisterio_fim_2;
        $ctc_verso->tempo_magisterio_dias_2 = $tempo_magisterio_dias_2;

//3
        $tempo_magisterio_incio_3 = $request->input('tempo_magisterio_incio_3');
        $tempo_magisterio_fim_3 = $request->input('tempo_magisterio_fim_3');

        if ($tempo_magisterio_incio_3 && $tempo_magisterio_fim_3) {
            $tempo_magisterio_incio_3 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_incio_3);
            $tempo_magisterio_fim_3 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_fim_3);
            $tempo_magisterio_dias_3 = $tempo_magisterio_incio_3->diffInDays($tempo_magisterio_fim_3);
        } else {
            $tempo_magisterio_incio_3 = null;
            $tempo_magisterio_fim_3 = null;
            $tempo_magisterio_dias_3 = null;
        }

        $ctc_verso->tempo_magisterio_incio_3 = $tempo_magisterio_incio_3;
        $ctc_verso->tempo_magisterio_fim_3 = $tempo_magisterio_fim_3;
        $ctc_verso->tempo_magisterio_dias_3 = $tempo_magisterio_dias_3;

        //4
        $tempo_magisterio_incio_4 = $request->input('tempo_magisterio_incio_4');
        $tempo_magisterio_fim_4 = $request->input('tempo_magisterio_fim_4');

        if ($tempo_magisterio_incio_4 && $tempo_magisterio_fim_4) {
            $tempo_magisterio_incio_4 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_incio_4);
            $tempo_magisterio_fim_4 = Carbon::createFromFormat('d/m/Y', $tempo_magisterio_fim_4);
            $tempo_magisterio_dias_4 = $tempo_magisterio_incio_4->diffInDays($tempo_magisterio_fim_4);
        } else {
            $tempo_magisterio_incio_4 = null;
            $tempo_magisterio_fim_4 = null;
            $tempo_magisterio_dias_4 = null;
        }

        $ctc_verso->tempo_magisterio_incio_4 = $tempo_magisterio_incio_4;
        $ctc_verso->tempo_magisterio_fim_4 = $tempo_magisterio_fim_4;
        $ctc_verso->tempo_magisterio_dias_4 = $tempo_magisterio_dias_4;
        
        
        
        
        $ctc_verso->save();
        return redirect()->route('verso.show', ['id' => $ctc_verso->ctc_certidao_id])->with(
                        'success',
                        "Tabela atualizada com sucesso."
        );
    }

}
