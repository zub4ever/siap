<?php

namespace App\Http\Requests\ApRequerimentosResquest;

use Illuminate\Foundation\Http\FormRequest;

class RequerimentoAposentadoriaVoluntariaFormRequest extends FormRequest {

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
            'nm_requerente' => ['required', 'max:250'],
            'matricula' => ['max:10'],
            'cpf'  => ['max:16'],
            'data_nascimento' => ['required', 'date_format:"d/m/Y"'],        
            'pis_pasep' => ['max:30'],
            'rg' => ['required', 'max:10'],
            'nm_rua' => ['required', 'max:10'],
            'numero_casa' => ['required', 'max:10'],
            'complemento' => ['required', 'max:10'],
            'cep' => ['required', 'max:10'],
            'nm_bairro' => ['required', 'max:10'],
            'nm_uf' => ['required', 'max:10'],
            'nr_telefone' => ['required', 'max:10'],
            'nm_lotacao' => ['required', 'max:10'],
            'data_solicitacao' => ['required', 'max:10'],
            'nm_local' => ['required', 'max:10'],
            'sexo_id'=> ['required'],
            'status_civil_id'=> ['required'],
            'termos_aposentadoria_id'=> ['required'],
            'termos_aposentadoria_responsavel_id'=> ['required'],
            'vinculo_municipio_id'=> ['required'],
            'orgao_id'=> ['required'],
            'funcao_id'=> ['required'],
            'city_id'=> ['required']
            
        ];
    }
    
    public function messages() {
        return [
            'nm_requerente.required' => 'O nome do requerente é obrigatório.',
            'matricula.required' => 'Numero da matrícula é obrigatório.'
            
        ];
    }

}
