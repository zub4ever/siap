<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Marital_Status;
use App\Obito;
use App\Orgao_Expedidor;
use App\Origin;
use App\Serve;
use App\Sexo;
use App\Type_Serve;
use Illuminate\Support\Facades\DB;
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
            'data_nascimento' => ['required', 'numeric'],
            'rg' => ['required', 'max:15'],
            'cpf' => ['required', 'max:15'],
            'pis_pasep' => ['required', 'max:15'],
            'nm_pai' => ['required', 'max:200'],
            'nm_mae' => ['required', 'max:200'],
            'origin_id' => ['required', 'exists:origin,id'],
             
        ];
    }
   
}
