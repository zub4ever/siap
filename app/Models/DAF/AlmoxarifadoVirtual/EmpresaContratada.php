<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmpresaContratada extends Model
{

    protected $table = 'almoxarifado_virtual_empresa_contratada';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'status',
        'cnae_principal_descricao',
        'cnae_principal_codigo',
        'cep',
        'data_abertura',
        'ddd',
        'telefone',
        'email',
        'tipo_logradouro',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'municipio',
        'uf'


    ];
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function contrato_empenho()
    {
        return $this->belongsTo('App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'almoxarifado_virtual_empresa_contratada_id');
    }
}
