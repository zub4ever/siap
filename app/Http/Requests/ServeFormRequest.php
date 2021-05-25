<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServeFormRequest extends FormRequest {

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
            'nm_servidor' => ['required', 'max:200'],
            'matricula' => ['required', 'max:200'],
            'sexo_id' => ['required', 'numeric'],
            'data_nascimento' => ['required', 'numeric'],
            'rg' => ['required', 'max:15'],
            'orgao_expedidor_id' => ['required', 'numeric'],
            'cpf' => ['required', 'max:15'],
            'pis_pasep' => ['required', 'max:15'],
            'nm_pai' => ['required', 'max:200'],
            'nm_mae' => ['required', 'max:200'],
            'telefone' => ['required', 'max:15'],
            'email' => ['required', 'max:200'],
            'obito_id' => ['required', 'numeric'],
            'origin_id' => ['required', 'numeric'],
            'type_serve_id' => ['required', 'numeric'],
            'marital_status_id' => ['required', 'numeric']
        ];
    }

}
