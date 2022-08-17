<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class AlmoCedido extends Model
{

    protected $table = 'almoxarifado_cedido';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_cedido',
        

    ];
    protected $guarded = [];

    public function almoxarifado()
    {

        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_cedido_id');
    }
}
