<?php

namespace App\Models\ApRequerimentos;

use Illuminate\Database\Eloquent\Model;

class TermosAposentadoria extends Model {

    protected $table = 'termos_aposentadoria';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_termos'
        
    ];
    protected $guarded = [];

    public function requerimentoAposentadoriaVoluntaria() {

        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'vinculo_municipio_id');
    }

}
