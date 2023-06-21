<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FonteDespesa extends Model
{

    protected $table = 'fonte_despesa';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_fonte',


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function contrato_empenho()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'fonte_despesa_id');
    }
}
