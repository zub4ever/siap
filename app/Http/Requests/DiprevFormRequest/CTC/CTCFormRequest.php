<?php

namespace App\Http\Requests\DiprevFormRequest\CTC;

use Illuminate\Foundation\Http\FormRequest;

class CTCFormRequest extends FormRequest
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
            
            'serve_id' => ['required'],


        ];
    }

    public function messages()
    {
        return [];
    }
}
