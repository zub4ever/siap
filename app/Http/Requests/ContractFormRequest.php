<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractFormRequest extends FormRequest {

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
            'origin_id' => ['required'],
            'serve_id' => ['required'],
            'nr_contrato' => ['required', 'max:1'],
            'orgao_id' => ['required'],
            'funcao_id' => ['required']
        ];
    }

    public function messages() {
        return [
            'nr_contrato.required' => 'O número do contrato é obrigatório.',
            'origin_id.required' => 'Origem é obrigatório.',
            'orgao_id.required' => 'Orgão é obrigatório.',
            'funcao_id.required' => 'Função é obrigatório.',
            'serve_id.required' => 'Servidor é obrigatório.'
        ];
    }
  }   