<?php

namespace App\Models\Conselhos;

use Illuminate\Database\Eloquent\Model;

class ConselhoTipo extends Model {

    protected $table = 'conselho_tipo';
    public $timestamps = true;
    protected $fillable = [
        'nm_tipo_conselho',
        
    ];
    protected $guarded = [];

    public function conselho_documentos() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoDocumentos::class, 'conselho_tipo_id');
    }
    
}
