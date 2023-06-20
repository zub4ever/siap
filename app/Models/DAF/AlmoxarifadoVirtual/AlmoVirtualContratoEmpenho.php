<?php

namespace App\Models\DAF\AlmoxarifadoVirtual;

use Illuminate\Database\Eloquent\Model;

class AlmoVirtualContratoEmpenho extends Model {

    protected $table = 'almoxarifado_virtual_contrato_empenho';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'cod_grp',
        'descricao',
        'saldo_total',
        'saldo_usado',
        'saldo_restante',
        'prazo_entrega_contrato',
        'fonte_despesa',
        'elemento_despesa',
        'programa_trabalho',
        'users_id',
        'almoxarifado_virtual_empresa_contratada_id'
    ];
    protected $guarded = [];

    public function users() {

        return $this->belongsToMany(\App\Models\User::class, 'users_id');
    }

    public function almo_virtual_contrato() {

        return $this->belongsToMany('\App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'almoxarifado_virtual_empresa_contratada_id');
    }



}
