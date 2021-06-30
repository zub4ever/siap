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
            'matricula' => ['required', 'max:200'],
            'nm_servidor' => ['required', 'max:200'],
            'sexo_id' => ['required'],
            'data_nascimento' => ['required', 'numeric'],
            'rg' => ['required', 'max:15'],
            'orgao_expedidor_id' => ['required'],
            'cpf' => ['required', 'max:15'],
            'pis_pasep' => ['required', 'max:15'],
            'nm_pai' => ['required', 'max:200'],
            'nm_mae' => ['required', 'max:200'],
            'obito_id' => ['required'],
            'origin_id' => ['required'],
            'type_serve_id' => ['required'],
            'marital_status_id' => ['required']
        ];
    }

}
