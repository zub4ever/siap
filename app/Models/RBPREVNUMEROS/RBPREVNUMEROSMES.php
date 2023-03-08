<?php

namespace App\Models\RBPREVNUMEROS;

use Illuminate\Database\Eloquent\Model;

class RBPREVNUMEROSMES extends Model {
    protected $table = 'rbprev_numeros_mes';
    public $timestamps = true;
    protected $fillable = [
    'nm_mes'
    
    ];
    protected $guarded = [];
    public function rbprev_numeros() {

        return $this->belongsToMany(\App\Models\RBPREVNUMEROS\RBPREVNUMEROS::class, 'rbprev_numeros_mes_id');
    }
}
