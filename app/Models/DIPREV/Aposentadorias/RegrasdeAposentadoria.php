<?php

namespace App\Models\DIPREV\Aposentadorias;
use Illuminate\Database\Eloquent\Model;

class RegrasdeAposentadoria extends Model {

    protected $table = 'regras_aposentadoria';
    public $timestamps = true;
    protected $fillable = [
                'nm_regra',
        
    ];
      protected $guarded = [];

    
    public function aposentadorias() {

        return $this->belongsToMany(\App\Models\DIPREV\Aposentadorias\Aposentadorias::class, 'regras_aposentadoria_id');
    }

    
}
