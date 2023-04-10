<?php

namespace App\Models\DIPREV\Aposentadorias;
use Illuminate\Database\Eloquent\Model;

class TipodeAposentadorias extends Model {

    protected $table = 'tipo_de_aposentadoria';
    public $timestamps = true;
    protected $fillable = [
                'nm_aposentadoria',
		
        
    ];
      protected $guarded = [];

    
    public function aposentadorias() {

        return $this->belongsToMany(\App\Models\DIPREV\Aposentadorias\Aposentadorias::class, 'tipo_de_aposentadoria_id');
    }

    
}
