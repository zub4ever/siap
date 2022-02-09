<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    protected $table = 'contract';
    public $timestamps = true;
    protected $fillable = [
        'nr_contrato',
        'origin_id',
        'orgao_id',
        'funcao_id',
        'serve_id',
        'status'
    ];
    protected $guarded = [];

    public function origin() {
        return $this->hasMany(Origin::class, 'origin_id');
    }

    public function orgao() {
        return $this->hasMany(Orgao::class, 'orgao_id');
    }

    public function serve() {
        return $this->hasMany(Serve::class, 'serve_id');
    }

    public function funcao() {
        return $this->hasMany(Funcao::class, 'funcao_id');
    }

}
