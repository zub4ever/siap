<?php

namespace App\Models\DIPREV\CTC;
use Illuminate\Database\Eloquent\Model;

class CTC extends Model {

    protected $table = 'ctc_certidao';
    public $timestamps = true;
    protected $fillable = [
                'ctc_numero',
		'serve_id',
		'contract_id' ,
		'origin_id' ,
		'orgao_id' ,
		'funcao_id' ,
		'tipo_certidao_id' ,	    
                'nr_processo' ,
                'data_pedido' ,
                'data_admissao',
                'data_exoneracao' ,	    
                'start_date',
	   	'end_date' ,
	   	'fonte_info' ,
	   	'local_destino' ,
	   	'destinacao' ,	   	
	   	'tempo_total' ,
        
    ];
      protected $guarded = [];

    
    public function serve(){
        return $this->belongsToMany(\App\Serve::class, 'serve_id');
    }  
     public function address(){
        return $this->belongsToMany(\App\Address::class, 'address_id');
    }  
    
    public function contract(){
        return $this->belongsToMany(\App\Contract::class, 'contract_id');
    } 
      
    public function origin() {
        return $this->hasMany(Origin::class, 'origin_id');
    }   
 
    public function sexo() {

        return $this->belongsToMany(Sexo::class, 'sexo_id');
    }
    public function tipocertidao() {

        return $this->belongsToMany(\App\Models\DIPREV\CTC\TipoCertidao::class, 'tipo_certidao_id');
    }
    public function ctc_deducao() {

        return $this->belongsToMany(\App\Models\DIPREV\CTC\CTCDeducao::class, 'ctc_certidao_id');
    }
    public function ctc_verso() {

        return $this->belongsToMany(\App\Models\DIPREV\CTC\CTCVerso::class, 'ctc_certidao_id');
    }

    
}
