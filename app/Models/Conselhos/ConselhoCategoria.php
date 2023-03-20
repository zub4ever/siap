<?php

namespace App\Models\Conselhos;

use Illuminate\Database\Eloquent\Model;

class ConselhoCategoria extends Model {

    protected $table = 'conselho_categoria';
    public $timestamps = true;
    protected $fillable = [
        'nm_categoria'
        
    ];
    protected $guarded = [];

    public function conselho_documentos() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoDocumentos::class, 'conselho_categoria_id');
    }
}
