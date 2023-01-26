<?php

namespace App\Models\DIPREV\CTC;
use Illuminate\Database\Eloquent\Model;

class TipoCertidao extends Model {

    protected $table = 'tipo_certidao';
    public $timestamps = true;
    protected $fillable = [
                'nm_tipocertidao'
        
    ];
      protected $guarded = [];

    
    public function ctc_certidao(){
        return $this->belongsToMany(\App\Models\DIPREV\CTC\CTC::class, 'tipo_certidao_id');
    }  
    

    
}
