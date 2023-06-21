<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;

class AlmoVirtualContratoEmpenho extends Model
{

    protected $table = 'almoxarifado_virtual_contrato_empenho';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'cod_grp',
        'descricao',
        'nr_contrato',
        'nr_sei',
        'prazo_entrega_contrato',
        'data_assinatura',
        'saldo_total',
        'saldo_usado',
        'saldo_restante',
        'fonte_despesa_id',
        'elemento_despesa_id',
        'programa_trabalho_id',
        'users_id',
        'almoxarifado_virtual_empresa_contratada_id'
    ];
    protected $guarded = [];



    public function users()
    {

        return $this->belongsToMany(\App\Models\User::class, 'users_id');
    }

    public function empresa_contratada()
    {

        return $this->belongsToMany('\App\Models\DAF\AlmoxarifadoVirtual\EmpresaContratada', 'almoxarifado_virtual_empresa_contratada_id');
    }

    public function elemento_despesa()
    {

        return $this->belongsToMany('\App\Models\DAF\AlmoxarifadoVirtual\ElementoDespesa', 'elemento_despesa_id');
    }

    public function fonte_despesa()
    {

        return $this->belongsToMany('\App\Models\DAF\AlmoxarifadoVirtual\FonteDespesa', 'fonte_despesa_id');
    }

    public function programa_trabalho()
    {

        return $this->belongsToMany('\App\Models\DAF\AlmoxarifadoVirtual\ProgramaTrabalho', 'programa_trabalho_id');
    }

    public function item_almo()
    {

        return $this->belongsToMany('\App\Models\DAF\AlmoxarifadoVirtual\ItemAlmoxarifado', 'almoxarifado_virtual_contrato_empenho_id');
    }


}
