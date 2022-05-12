<?php

namespace App\Models\ApRequerimentos;

use Illuminate\Database\Eloquent\Model;

class VinculoMunicipio extends Model {

    protected $table = 'vinculo_municipio';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_vinculo'
    ];
    protected $guarded = [];

    public function requerimentoAposentadoriaVoluntaria() {

        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'vinculo_municipio_id');
    }

}
