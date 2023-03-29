<?php

namespace App\Http\Requests\RBPREVNUMEROSFormRequest;

use Illuminate\Foundation\Http\FormRequest;

class RBPREVNUMEROSFormRequest extends FormRequest {

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
            'rbprev_numeros_mes_id' => 'required|exists:rbprev_numeros_mes,id',
            'rbprev_numeros_ano_id' => 'required|exists:rbprev_numeros_ano,id',
            'path_pdf' => 'required|mimes:pdf|max:10240', // máximo de 10MB
        ];
    }

    public function messages() {
        return [
            'rbprev_numeros_mes_id.required' => 'O campo mês é obrigatório',
            'rbprev_numeros_mes_id.exists' => 'O mês selecionado é inválido',
            'rbprev_numeros_ano_id.required' => 'O campo ano é obrigatório',
            'rbprev_numeros_ano_id.exists' => 'O ano selecionado é inválido',
            'path_pdf.required' => 'O arquivo PDF é obrigatório',
            'path_pdf.mimes' => 'O arquivo deve ser do tipo PDF',
            'path_pdf.max' => 'O tamanho máximo do arquivo é de 10MB',
        ];
    }

}
