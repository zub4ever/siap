<?php

namespace App\Http\Requests\FolhaPagamentoFormRequest;

use Illuminate\Foundation\Http\FormRequest;

class FolhaPagamentoFormRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'ano', /* => ['required'],*/
            'mes',
            'qtdAposentadoFffin',
            'qtdAposentadoFprev' ,
            'qtdPensionistaFfin',
            'qtdPensionistaFprev',
            'qtdTotalFfin',
            'qtdTotalFprev',
            'valorAposFprev' => 'required|numeric|max:100000000',
            'valorAposFfin' => 'required|numeric|max:100000000',
            'valorPenFfin' => 'required|numeric|max:100000000',
            'valorPenFprev' => 'required|numeric|max:100000000',
            'valorTotalFfin' => 'required|numeric|max:100000000',
            'valorTotalFprev'=> 'required|numeric|max:100000000',
        ];
    }

}
