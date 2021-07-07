<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serve extends Model {

    protected $table = 'serve';
    public $timestamps = true;
    protected $fillable = [
        'nm_servidor',
        'matricula',
        'data_nascimento',
        'rg',
        'cpf',
        'pis_pasep',
        'nm_pai',
        'nm_mae',
        'origin_id',
        'marital_status_id',
        'type_serve_id',
        'sexo_id',
        'orgao_expedidor_id',
        'obito_id'
    ];
    protected $guarded = [];

    public function origin() {
        return $this->hasOne(Origin::class, 'origin_id');
    }
    public function sexo() {
        return $this->hasOne(Sexo::class, 'sexo_id');
    }
    public function orgao_expedidor() {
        return $this->hasOne(Orgao_expedidor::class, 'orgao_expedidor_id');
    }
    public function obito() {
        return $this->hasOne(Obito::class, 'obito_id');
    }
    public function type_serve() {
        return $this->hasOne(Type_Serve::class, 'type_serve_id');
    }
    public function marital_status() {
        return $this->hasOne(Marital_Status::class, 'marital_status_id');
    }

}
