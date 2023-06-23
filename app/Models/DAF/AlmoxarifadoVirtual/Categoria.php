<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Categoria extends Model
{

    protected $table = 'almoxarifado_virtual_categoria';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_categoria',


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function almo_categoria()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'almoxarifado_virtual_categoria_id');
    }
}
