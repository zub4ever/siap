<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressFormRequest extends FormRequest {

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
            'nm_rua' => ['required', 'max:150'],
            'nr_casa' => ['required', 'max:15'],         
            'serve_id' => ['required'],
            'city_id' => ['required'],
            'state_id' => ['required']
        ];
    }

}
