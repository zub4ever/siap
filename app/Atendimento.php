<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
   
     protected $table = 'atendimento';
    public $timestamps = true;
    protected $fillable = [
        'nm_assegurado',
        'nm_cidade',
        'nm_atendimento',
        'numero_telefone',
        'atendimento_status_id'
    ];
   
    
    public function atendimento_status(){

          return $this->hasMany(AtendimentoStatus::class,'atendimento_status_id');
    }
    
    
    
}
