<?php

namespace App\Models\ProcessosHomologadosTCE;

use Illuminate\Database\Eloquent\Model;

class ProcessosTCE extends Model {

    protected $table = 'tce_processos_homologados';
    public $timestamps = true;
    protected $fillable = [
        'users_id',
        'tce_mes_id',
        'tce_ano_id',
        'tipo_pensao_id',
        'tipo_aposentadoria_id',
        'data_diario_eletronico',
        'data_notificacao',
        'nr_acordao',
        'nm_assegurado',
    ];
    protected $guarded = [];

    public function tce_ano() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoAno::class, 'conselho_ano_id');
    }

    public function tce_mes() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoCategoria::class, 'conselho_categoria_id');
    }

    public function tipo_aposentadoria() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoTipo::class, 'conselho_tipo_id');
    }

    public function tipo_pensao() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoTipo::class, 'conselho_tipo_id');
    }

    public function conselho_tipo() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoTipo::class, 'conselho_tipo_id');
    }

    public function users() {

        return $this->belongsToMany(\App\Models\User::class, 'users_id');
    }

}
