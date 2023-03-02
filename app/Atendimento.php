<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
   
     protected $table = 'atendimento';
    public $timestamps = true;
    protected $fillable = [
        'nm_assegurado',
        'matricula',
        'numero_telefone',
        'email',
        'cpf',
        'descricao',
        'atendimento_assunto_id',
        'city_id',
        'state_id',
        'almoxarifado_localizacao_dpto_id',
        'atendimento_status_id',
        'atendimento_tipo_servidor_id'
        
    ];
   
    
    public function atendimento_status(){

          return $this->hasMany(AtendimentoStatus::class,'atendimento_status_id');
    }
    
    public function atendimento_assunto(){

          return $this->hasMany(AtendimentoStatus::class,'atendimento_assunto_id');
    }
    public function city(){

          return $this->hasMany(AtendimentoStatus::class,'city_id');
    }
    
    public function state(){

          return $this->hasMany(AtendimentoStatus::class,'state_id');
    }
     public function almoxarifado_localizacao_dpto()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO', 'almoxarifado_localizacao_dpto_id');
    }
    public function atendimento_tipo_servidor()
    {
        return $this->belongsTo(AtendimentoTipoServidor::class, 'atendimento_tipo_servidor_id');
    }
    
}
