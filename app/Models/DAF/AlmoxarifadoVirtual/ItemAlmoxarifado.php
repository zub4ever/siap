<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemAlmoxarifado extends Model
{

    protected $table = 'almoxarifado_virtual_item';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'cod_item',
        'marca',
        'descricao',
        'valor_uni',
        'categoria',
        'almoxarifado_virtual_contrato_empenho_id'



    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function contrato_empenho()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'almoxarifado_virtual_item_id');
    }
}
