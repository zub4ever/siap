<?php

namespace App\Models\ProcessosHomologadosTCE;

use Illuminate\Database\Eloquent\Model;

class TipoAposentadoria extends Model {

    protected $table = 'tce_tipo_aposentadoria';
    public $timestamps = true;
    protected $fillable = [
        'nm_aposentadoria',
        
    ];
    protected $guarded = [];

    public function tce_processos() {

        return $this->belongsToMany(\App\Models\ProcessosHomologadosTCE\ProcessosTCE::class, 'tipo_aposentadoria_id');
    }

}
