<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class AlmoMarca extends Model
{

    protected $table = 'almoxarifado_marca';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_marca',
        

    ];
    protected $guarded = [];

    public function almoxarifado()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_marca_id');
    }
}