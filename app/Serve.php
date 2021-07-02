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
        'nm_mae'
        //'origin_id'
    ];
    protected $guarded = [];


}
