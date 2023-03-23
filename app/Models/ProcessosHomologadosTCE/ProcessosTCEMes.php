<?php

namespace App\Models\ProcessosHomologadosTCE;

use Illuminate\Database\Eloquent\Model;

class ProcessosTCEMes extends Model {

    protected $table = 'tce_mes';
    public $timestamps = true;
    protected $fillable = [
        'nm_mes',
        
    ];
    protected $guarded = [];

    public function tce_processos() {

        return $this->belongsToMany(\App\Models\ProcessosHomologadosTCE\ProcessosTCE::class, 'tce_mes_id');
    }

}
