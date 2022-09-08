<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class AlmoCondicao extends Model
{

    protected $table = 'almoxarifado_condicao';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_condicao',
        

    ];
    protected $guarded = [];

    public function almoxarifado()
    {

        return $this->belongsTo('App\Models\DAF\Almoxarifado', 'almoxarifado_condicao_id');
    }
}
