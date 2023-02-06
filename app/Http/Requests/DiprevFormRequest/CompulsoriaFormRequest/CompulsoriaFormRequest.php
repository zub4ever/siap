<?php

namespace App\Http\Requests\DiprevFormRequest\CompulsoriaFormRequest;

use Illuminate\Foundation\Http\FormRequest;

class CompulsoriaFormRequest extends FormRequest
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
            'nm_requerente' => ['max:300'],

        ];
    }

    public function messages()
    {
        return [];
    }
}
