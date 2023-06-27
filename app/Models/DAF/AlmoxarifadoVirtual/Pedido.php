<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{

    protected $table = 'almoxarifado_virtual_pedido';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nr_pedido',
        'quantidade_pedido',
        'valor_uni',
        'valor_pedido',
        'almoxarifado_virtual_cx_uni_id',
        'almoxarifado_virtual_item_id',
        'almoxarifado_virtual_contrato_empenho_id',


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function contrato_empenho()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'almoxarifado_virtual_item_id');
    }

    public function almo_virtual()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'almoxarifado_virtual_item_id');
    }
}
