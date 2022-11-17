<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtendimentoAssunto extends Model
{
   
     protected $table = 'atendimento_assunto';
    public $timestamps = true;
    protected $fillable = [
        'nm_assunto'
    ];
   
    
    public function atendimento(){

          return $this->hasOne(Atendimento::class,'atendimento_assunto_id');
    }
    
    
    
}
