<?php

namespace App\Models\DIPREV\CTC;
use Illuminate\Database\Eloquent\Model;

class TipoCertidao extends Model {

    protected $table = 'prova_de_vida_status';
    public $timestamps = true;
    protected $fillable = [
                'nm_prova_vida_status'
        
    ];
      protected $guarded = [];

    
    public function prova_vida_status(){
        return $this->belongsToMany(\App\Models\DIPREV\ProvadeVida\ProvaDeVida::class, 'nm_prova_vida_status_id');
    }  
    

    
}
