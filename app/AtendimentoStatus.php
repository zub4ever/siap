<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtendimentoStatus extends Model
{
   
     protected $table = 'atendimento_status';
    public $timestamps = true;
    protected $fillable = [
        'statusAtendimento'
    ];
   
    
    public function atendimento(){

          return $this->hasOne(Atendimento::class,'atendimento_status_id');
    }
    
    
    
}
