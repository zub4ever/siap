<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtendimentoStatus extends Model
{
   protected $table = 'atendimento_status';
    
   
    protected function atendimento() {
        return $this->belongsTo(Atendimento::class, 'atendimento_status_id');
    }
}
