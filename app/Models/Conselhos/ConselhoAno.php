<?php

namespace App\Models\Conselhos;

use Illuminate\Database\Eloquent\Model;

class ConselhoAno extends Model {

    protected $table = 'conselho_ano';
    public $timestamps = true;
    protected $fillable = [
        'nm_ano'
        
    ];
    protected $guarded = [];

    public function conselho_documentos() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoDocumentos::class, 'conselho_ano_id');
    }
}
