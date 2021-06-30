<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model {

    //
    protected $table = 'funcao';
    public $timestamps = true;
    protected $fillable = [
        'nm_funcao',
        
        'orgao_id'
    ];
    protected $guarded = [];


    public function orgao() {
        return $this->belongsTo(Orgao::class, 'orgao_id');
    }

}
