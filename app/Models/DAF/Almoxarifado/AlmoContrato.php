<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class AlmoContrato extends Model
{

    protected $table = 'almoxarifado_contrato';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nr_contrato',
		'ano_contrato',
		'status'
        

    ];
    protected $guarded = [];

    public function almoxarifado()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_contrato_id');
    }
}