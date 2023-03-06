<?php

namespace App\Models\DIPREV\CTC;

use Illuminate\Database\Eloquent\Model;

class CTCDeducao extends Model {

    protected $table = 'ctc_certidao_deducao';
    public $timestamps = true;
    protected $fillable = [
        'ctc_certidao_id',
        'ano',
        'tempo_bruto',
        'faltas',
        'licencas',
        'licencas_sem_vencimento',
        'suspensoes',
        'disponibilidade',
        'outras',
        'tempo_liquido'
    ];
    protected $guarded = [];

    

    public function ctc() {

        return $this->belongsToMany(\App\Models\DIPREV\CTC\CTC::class, 'ctc_certidao_id');
    }

}
