<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class AlmoLocalizacaoDPTO extends Model
{

    protected $table = 'almoxarifado_localizacao_dpto';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_departamento',
        'status'
        

    ];
    protected $guarded = [];

    public function almoxarifado()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado', 'almoxarifado_localizacao_dpto_id');
    }
}