<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirfFormRequest extends FormRequest
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

    public function rules()
    {
        return [
            'pdfs.*' => 'required|mimes:pdf|max:2048',
        ];
    }
}
