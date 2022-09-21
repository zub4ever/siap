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
            'data_nascimento' => ['required', 'date_format:"d/m/Y"'],
            'rg' => ['max:15'],
            'cpf' => ['required', 'max:15'],
            'pis_pasep' => ['max:15'],
            'nm_pai' => ['max:200'],
            'nm_mae' => ['max:200'],
            'origin_id' => ['required'],
            'marital_status_id' => ['required'],
            'type_serve_id'=> ['required'],
            'sexo_id'=> ['required'],
            'orgao_expedidor_id' => ['required'],
            'obito_id'=> ['required'],
            'tp_servidor_id'=> ['required']
        ];
    }

}
