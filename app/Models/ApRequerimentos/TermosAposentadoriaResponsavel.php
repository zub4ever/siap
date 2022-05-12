<?php

namespace App\Models\ApRequerimentos;

use Illuminate\Database\Eloquent\Model;

class TermosAposentadoriaResponsavel extends Model {

    protected $table = 'termos_aposentadoria_responsavel';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_local',
        'data_solicitacao',
        'nm_responsavel'
    ];
    protected $guarded = [];

    public function requerimentoAposentadoriaVoluntaria() {

        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'termos_aposentadoria_responsavel_id');
    }

}
