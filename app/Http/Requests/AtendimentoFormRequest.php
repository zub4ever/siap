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
            'nm_cidade' => ['required', 'max:100'],         
            'nm_atendimento' => ['required', 'max:100'],
            'numero_telefone' => ['required', 'max:15'],
            
        ];
    }

}
