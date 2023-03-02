<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtendimentoTipoServidor extends Model
{
   
     protected $table = 'atendimento_tipo_servidor';
    public $timestamps = true;
    protected $fillable = [
        'nm_tipo_servidor'
    ];
   
    
    public function atendimento(){

          return $this->hasOne(Atendimento::class,'atendimento_tipo_servidor_id');
    }
    
    
    
}
