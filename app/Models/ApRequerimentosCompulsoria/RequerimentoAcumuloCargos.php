<?php

namespace App\Models\ApRequerimentosCompulsoria;

use Illuminate\Database\Eloquent\Model;

class RequerimentoAcumuloCargos extends Model {

    protected $table = 'requerimento_aposentadoria_acumulo_cargos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_requerente',
        'requerimento_aposentadoria_compulsoria_id'


    ];
    protected $guarded = [];

    public function requerimento_aposentadoria_compulsoria()
    {
        return $this->belongsTo('App\Models\ApRequerimentosCompulsoria\RequerimentoApCompulsoria', 'requerimento_aposentadoria_compulsoria_id');
    }

}
