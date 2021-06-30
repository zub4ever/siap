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
            'data_nascimento' => ['required', 'numeric'],
            'rg' => ['required', 'max:15'],
            'cpf' => ['required', 'max:15'],
            'pis_pasep' => ['required', 'max:15'],
            'nm_pai' => ['required', 'max:200'],
            'nm_mae' => ['required', 'max:200'],
            'origin_id' => ['required', 'exists:origin,id']/*,
            //Chaves Estrangeiras
            'orgao_expedidor_id' => ['required', 'exists:orgao_expedidor,id'],
            'sexo_id' => ['required', 'exists:sexo,id'],
            'obito_id' => ['required', 'exists:obito,id'],
            
            'type_serve_id' => ['required', 'exists:type_serve,id'],
            'marital_status_id' => ['required', 'exists:marital_status,id'] */
        ];
    }

}
