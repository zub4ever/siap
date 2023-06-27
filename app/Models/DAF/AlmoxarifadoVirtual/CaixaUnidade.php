<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CaixaUnidade extends Model
{

    protected $table = 'almoxarifado_virtual_cx_uni';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_caixa_unidade',


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function itemPedido()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\PedidoAlmoxarifado', 'almoxarifado_virtual_cx_uni_id');
    }
}
