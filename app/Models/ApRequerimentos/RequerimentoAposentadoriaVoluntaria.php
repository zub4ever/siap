<?php

namespace App\Models\ApRequerimentos;

use Illuminate\Database\Eloquent\Model;

class RequerimentoAposentadoriaVoluntaria extends Model {

    protected $table = 'requerimento_aposentadoria_voluntaria';
    public $timestamps = true;
    protected $fillable = [
        'nm_requerente',
        'matricula',  
        'cpf', 
        'data_nascimento',
        'pis_pasep',
        'rg',
        'nm_rua',
        'numero_casa',
        'complemento',
        'cep',
        'nm_bairro',
        'nm_uf',
        'nr_telefone',
        'nm_lotacao',
        'data_solicitacao',  
        'nm_local',
        'nm_cargo',
        'sexo_id',
        'status_civil_id',
        'termos_aposentadoria_id',
        'termos_aposentadoria_responsavel_id',
        'vinculo_municipio_id',
        'orgao_id',
        'funcao_id',
        'city_id',
        'status'
    ];
    public function sexo() {
        return $this->belongsToMany(Sexo::class, 'sexo_id');
    }
    public function marital_status() {
        return $this->hasMany(Marital_Status::class, 'marital_status_id');
    }
    public function termosAposentadoria() {
        return $this->hasMany('App\Models\ApRequerimentos\TermosAposentadoria', 'termos_aposentadoria_id');
    }
    public function termosAposentadoriaResponsavel() {
        return $this->hasMany('App\Models\ApRequerimentos\TermosAposentadoriaResponsavel', 'termos_aposentadoria_responsavel_id');
    }
    public function vinculoMunicipio() {
        return $this->hasMany('App\Models\ApRequerimentos\VinculoMunicipio', 'vinculo_municipio_id');
    }    
    public function orgao() {
        return $this->hasMany(Orgao::class, 'orgao_id');
    }
    public function funcao() {
        return $this->hasMany(Funcao::class, 'funcao_id');
    }
    public function city() {
        return $this->belongsToMany(City::class, 'city_id');
    }
}
