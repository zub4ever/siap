<?php

namespace App\Models\RBPREVNUMEROS;

use Illuminate\Database\Eloquent\Model;

class RBPREVNUMEROSANO extends Model {
    protected $table = 'rbprev_numeros_ano';
    public $timestamps = true;
    protected $fillable = [
    'nm_ano',
    
    ];
    protected $guarded = [];
    
    public function rbprev_numeros() {

        return $this->belongsToMany(\App\Models\RBPREVNUMEROS\RBPREVNUMEROS::class, 'rbprev_numeros_ano_id');
    }

}
