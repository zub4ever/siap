<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramaTrabalho extends Model
{

    protected $table = 'programa_trabalho';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_programa',


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function contrato_empenho()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'programa_trabalho_id');
    }
}
