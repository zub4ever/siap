<?php

namespace App\Models\RBPREVNUMEROS;

use Illuminate\Database\Eloquent\Model;

class RBPREVNUMEROS extends Model {

    protected $table = 'rbprev_numeros';
    public $timestamps = true;
    protected $fillable = [
        'rbprev_numeros_ano_id',
        'rbprev_numeros_mes_id',
        'path_pdf'
    ];
    protected $guarded = [];

    public function rbprev_numeros_mes() {

        return $this->belongsToMany(\App\Models\RBPREVNUMEROS\RBPREVNUMEROSMES::class, 'rbprev_numeros_mes_id');
    }
    public function rbprev_numeros_ano() {

        return $this->belongsToMany(\App\Models\RBPREVNUMEROS\RBPREVNUMEROSANO::class, 'rbprev_numeros_ano_id');
    }
}
