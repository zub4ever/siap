<?php

namespace App\Models\Conselhos;

use Illuminate\Database\Eloquent\Model;

class ConselhoDocumentos extends Model {

    protected $table = 'conselho_documentos';
    public $timestamps = true;
    protected $fillable = [
        'conselho_tipo_id',
        'conselho_ano_id',
        'conselho_categoria_id',
        'users_id',
        'descricao',
        'pdf_path',
    ];
    protected $guarded = [];

    public function conselho_ano() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoAno::class, 'conselho_ano_id');
    }
    public function conselho_categoria() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoCategoria::class, 'conselho_categoria_id');
    }
    public function conselho_tipo() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoTipo::class, 'conselho_tipo_id');
    }
    public function users() {

        return $this->belongsToMany(\App\Models\User::class, 'users_id');
    }
}
