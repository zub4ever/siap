<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirfPMRBFormRequest extends FormRequest
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
            'pdfs_pmrb.*' => 'required|mimes:pdf|max:2048',
        ];
    }
}
