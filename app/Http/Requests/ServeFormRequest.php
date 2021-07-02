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
            //Chaves Estrangeiras
            'orgao_expedidor_id' => ['required', 'exists:orgao_expedidor,id'],
            'sexo_id' => ['required', 'exists:sexo,id'],
            'obito_id' => ['required', 'exists:obito,id'],
            
            'type_serve_id' => ['required', 'exists:type_serve,id'],
            'marital_status_id' => ['required', 'exists:marital_status,id'] 
        ];
    }
    public function messages()
    {
        return [
            'matricula.required' => 'O nome é obrigatório.',
            'nome.string' => 'O nome é inválido.',
            //'nome.max' => 'O nome não pode ser maior que 100 caracteres.',
            //'email.required' => 'O email é obrigatório.',
           // 'email.email' => 'Email é inválido.',
           // 'email.max' => 'O email não pode ser maior que 200 caracteres.',
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.max' => 'O CPF não pode ser maior que 15 caracteres',
            'rg.required' => 'O RG é obrigatório.',
            'rg.max' => 'O RG é inválido.',
            'data_nascimento.required' => 'A data de nascimento é obrigatória.',
            'data_nascimento.date_format' => 'A data de nascimento é inválida.',
            //'id_escolaridades.required' => 'A escolaridade é obrigatória.',
          //  'id_escolaridades.exists' => 'A escolaridade é inválida.',
            'sexo_id.required' => 'O sexo é obrigatório.',
           // 'sexo.in' => 'O sexo é inválido.',
            'marital_status_id.required' => 'O estado civil é obrigatório.',
           
             'orgao_expedidor_id.required' => 'O vinculo é obrigatório.',
             'obito_id.required' =>'Informar obito se faz obrigatório',
            'origin_id.required'=>'Origem do servidor é obrigatória',
            'type_serve_id.required'=>'A situação do servidor é obrigatória',
         
            
        ];
    }

}
