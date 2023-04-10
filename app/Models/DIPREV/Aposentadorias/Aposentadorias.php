<?php

namespace App\Models\DIPREV\Aposentadorias;
use Illuminate\Database\Eloquent\Model;

class Aposentadorias extends Model {

    protected $table = 'aposentadorias_concedidas';
    public $timestamps = true;
    protected $fillable = [
                'nr_processo',
		'nr_protocolo',
		'data_aposentadoria' ,
		'data_diario_oficial' ,
		'nr_portaria' ,
		'regras_aposentadoria_id' ,
		'tipo_de_aposentadoria_id' ,	    
                'serve_id' ,
                'funcao_id' ,
                'users_id'
        
    ];
      protected $guarded = [];

    
    public function serve(){
        return $this->belongsToMany(\App\Serve::class, 'serve_id');
    }  
     
    public function users() {

        return $this->belongsToMany(\App\Models\User::class, 'users_id');
    }
    public function funcao() {

        return $this->belongsToMany(\App\Models\Funcao::class, 'funcao_id');
    }
    public function regras_aposentadoria() {

        return $this->belongsToMany(\App\Models\DIPREV\Aposentadorias\RegrasdeAposentadoria::class, 'regras_aposentadoria_id');
    }
    public function tipo_aposentadoria() {

        return $this->belongsToMany(\App\Models\DIPREV\Aposentadorias\TipodeAposentadorias::class, 'tipo_de_aposentadoria_id');
    }
    
    

    
}
