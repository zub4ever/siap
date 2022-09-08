<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class AlmoTipo extends Model
{

    protected $table = 'almoxarifado_tipo';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_tipo',
        

    ];
    protected $guarded = [];

    public function almoxarifado()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado', 'almoxarifado_tipo_id');
    }
}