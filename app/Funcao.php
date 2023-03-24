<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model {

    //
    protected $table = 'funcao';
    public $timestamps = true;
    protected $fillable = [
        'nm_funcao',
        
        'orgao_id'
    ];
    protected $guarded = [];


    public function orgao() {
        return $this->belongsTo(Orgao::class, 'orgao_id');
    }
    
    
     public function requerimentoAposentadoriaVoluntaria() {
        
        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'funcao_id');
    }
    public function tce_processos() {

        return $this->belongsToMany(\App\Models\ProcessosHomologadosTCE\ProcessosTCE::class, 'funcao_id');
    }

}
