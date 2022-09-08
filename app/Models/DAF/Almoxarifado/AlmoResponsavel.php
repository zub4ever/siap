<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class AlmoResponsavel extends Model
{

    protected $table = 'almoxarifado_responsavel';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_responsavel',
		'status'
        

    ];
    protected $guarded = [];

    public function almoxarifado()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado', 'almoxarifado_responsavel_id');
    }
}