<?php

namespace App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest;

use Illuminate\Foundation\Http\FormRequest;

class DependenteFormRequest extends FormRequest
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
            'nm_dependente' => ['required', 'max:300'],
            'requerimento_aposentadoria_compulsoria_id',



        ];
    }

    public function messages()
    {
        return [];
    }
}
