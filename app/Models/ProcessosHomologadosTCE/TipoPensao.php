<?php

namespace App\Models\ProcessosHomologadosTCE;

use Illuminate\Database\Eloquent\Model;

class TipoPensao extends Model {

    protected $table = 'tce_tipo_pensao';
    public $timestamps = true;
    protected $fillable = [
        'nm_pensao',
        
    ];
    protected $guarded = [];

    public function tce_processos() {

        return $this->belongsToMany(\App\Models\ProcessosHomologadosTCE\ProcessosTCE::class, 'tipo_pensao_id');
    }

}
