<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtendimentoFormRequest extends FormRequest {

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
            'nm_assegurado' => ['required', 'max:100'],
            'numero_telefone' => ['max:15'],
            'email'  => ['max:150'],
            'cpf' => ['max:15'],         
            'descricao' => ['max:400'],
            'atendimento_assunto_id' => ['required'],
            'city_id' => ['required'],
           'state_id' => ['required'],
            'almoxarifado_localizacao_dpto_id' => ['required'],
            'atendimento_status_id' => ['required']
        ];
    }
    
    public function messages() {
        return [
            'nm_assegurado.required' => 'O nome do assegurado é obrigatório.',
            'numero_telefone.required' => 'Numero de contato é obrigatório.'
            
        ];
    }

}
