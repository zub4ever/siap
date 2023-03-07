<?php

namespace App\Models\DIPREV\CTC;

use Illuminate\Database\Eloquent\Model;

class CTCVerso extends Model {

    protected $table = 'ctc_verso';
    public $timestamps = true;
    protected $fillable = [
        'ctc_certidao_id',
        'tempo_bruto_inicio_1',
        'tempo_bruto_fim_1',
        'tempo_bruto_dias_1',
        'id_ocorrencia_1',
        'tempo_bruto_inicio_2',
        'tempo_bruto_fim_2',
        'tempo_bruto_dias_2',
        'id_ocorrencia_2',
        'tempo_bruto_inicio_3',
        'tempo_bruto_fim_3',
        'tempo_bruto_dias_3',
        'id_ocorrencia_3',
        'tempo_bruto_inicio_4',
        'tempo_bruto_fim_4',
        'tempo_bruto_dias_4',
        'id_ocorrencia_4',
        'tempo_bruto_inicio_5',
        'tempo_bruto_fim_5',
        'tempo_bruto_dias_5',
        'id_ocorrencia_5',
        'tempo_bruto_inicio_6',
        'tempo_bruto_fim_6',
        'tempo_bruto_dias_6',
        'id_ocorrencia_6',
        'tempo_especial_inicio_1',
        'tempo_especial_fim_1',
        'tempo_especial_dias_1',
        'tempo_especial_inicio_2',
        'tempo_especial_fim_2',
        'tempo_especial_dias_2',
        'tempo_especial_inicio_3',
        'tempo_especial_fim_3',
        'tempo_especial_dias_3',
        'tempo_especial_inicio_4',
        'tempo_especial_fim_4',
        'tempo_especial_dias_4',
        'tempo_magisterio_incio_1',
        'tempo_magisterio_fim_1',
        'tempo_magisterio_dias_1',
        'tempo_magisterio_incio_2',
        'tempo_magisterio_fim_2',
        'tempo_magisterio_dias_2',
        'tempo_magisterio_incio_3',
        'tempo_magisterio_fim_3',
        'tempo_magisterio_dias_3',
        'tempo_magisterio_incio_4',
        'tempo_magisterio_fim_4',
        'tempo_magisterio_dias_4',
    ];
    protected $guarded = [];

    public function ctc() {

        return $this->belongsToMany(\App\Models\DIPREV\CTC\CTC::class, 'ctc_certidao_id');
    }

}
