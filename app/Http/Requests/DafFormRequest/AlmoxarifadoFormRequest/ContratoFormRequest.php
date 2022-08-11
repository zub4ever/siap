<?php

namespace App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest;

use Illuminate\Foundation\Http\FormRequest;

class ContratoFormRequest extends FormRequest {

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
            'nr_contrato',
			'ano_contrato'

        ];
    }

    public function messages() {
        return [


        ];
    }

}
