<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistroPreco extends Model
{

    protected $table = 'almoxarifado_virtual_registro_preco';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nr_pedido',
        'valor_total_pedido',
        'almoxarifado_virtual_contrato_empenho_id'


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */

}
