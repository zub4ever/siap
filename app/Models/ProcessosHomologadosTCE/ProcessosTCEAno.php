<?php

namespace App\Models\ProcessosHomologadosTCE;

use Illuminate\Database\Eloquent\Model;

class ProcessosTCEAno extends Model {

    protected $table = 'tce_ano';
    public $timestamps = true;
    protected $fillable = [
        'nm_ano'
        
    ];
    protected $guarded = [];

    public function tce_processos() {

        return $this->belongsToMany(\App\Models\ProcessosHomologadosTCE\ProcessosTCE::class, 'tce_ano_id');
    }

}
