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
            'cpf' => ['max:15'],
            'email'  => ['max:30'],
            'nm_cidade' => ['max:100'],         
            'nm_atendimento' => ['max:100'],
            'numero_telefone' => ['required', 'max:15'],
            'descricao' => ['max:300']
           
            
        ];
    }
    
    public function messages() {
        return [
            'nm_assegurado.required' => 'O nome do assegurado é obrigatório.',
            'numero_telefone.required' => 'Numero de contato é obrigatório.'
            
        ];
    }

}
