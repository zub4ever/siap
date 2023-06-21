<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ElementoDespesa extends Model
{

    protected $table = 'elemento_despesa';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_elemento',


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function contrato_empenho()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'elemento_despesa_id');
    }
}
