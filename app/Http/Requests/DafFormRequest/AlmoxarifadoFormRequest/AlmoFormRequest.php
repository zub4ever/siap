<?php

namespace App\Http\Requests\DafFormRequest\AlmoxarifadoFormRequest;

use Illuminate\Foundation\Http\FormRequest;

class AlmoFormRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nm_patrimonio' => ['required', 'max:250'],
            'descricao' => ['required', 'max:300'],
            'observacao'  => ['required', 'max:250'],
            'almoxarifado_tipo_id' => ['required'],
            'almoxarifado_condicao_id' => ['required'],
            'almoxarifado_localizacao_dpto_id' => ['required'],
            'almoxarifado_responsavel_id' => ['required'],
            'almoxarifado_contrato_id' => ['required'],
            'almoxarifado_marca_id' => ['required'],
            'almoxarifado_cedido_id' => ['required'],
            'cedido_localizacao' => ['required', 'max:300']
        ];
    }

    public function messages()
    {
        return [];
    }
}
