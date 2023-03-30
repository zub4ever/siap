<?php

namespace App\Http\Requests\ProcessosHomologadosTCE;

use Illuminate\Foundation\Http\FormRequest;

class ProcessosHomologadosTCEFormRequest extends FormRequest {

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
            'nm_assegurado'=> ['required', 'max:200'],
            'funcao_id'=> ['required'],
            'tce_mes_id'=> ['required'],
            'tce_ano_id'=> ['required'],
        ];
    }

    public function messages() {
        return [
            'funcao_id.required' => 'O campo Função é obrigatório',
            'funcao_id.exists' => 'A Função selecionado é inválido',
            'tce_ano_id.required' => 'O campo ano é obrigatório',
            'tce_ano_id.exists' => 'O ano selecionado é inválido',
            
        ];
    }

}
