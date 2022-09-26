<?php

namespace App\Models\ApRequerimentosCompulsoria;

use Illuminate\Database\Eloquent\Model;

class RequerimentoDependente extends Model {

    protected $table = 'requerimento_aposentadoria_dependentes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_dependente',


    ];
    protected $guarded = [];

    public function requerimento_aposentadoria_compulsoria()
    {
        return $this->belongsTo('App\Models\ApRequerimentosCompulsoria\RequerimentoDependente', 'requerimento_aposentadoria_compulsoria_id');
    }

}
