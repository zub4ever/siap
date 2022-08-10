<?php

namespace App\Models\DAF\Almoxarifado;

use Illuminate\Database\Eloquent\Model;

class Almo extends Model
{

    protected $table = 'almoxarifado';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_patrimonio',
        'descricao',
        'observacao',
        'almoxarifado_tipo_id',
        'almoxarifado_condicao_id',
        'almoxarifado_localizacao_dpto_id',
        'almoxarifado_responsavel_id',
        'almoxarifado_contrato_id',
        'almoxarifado_marca_id',
        'status'

    ];
    protected $guarded = [];

    public function almoxarifado_condicao()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_condicao_id');
    }
    public function almoxarifado_contrato()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_contrato_id');
    }
    public function almoxarifado_localizacao_dpto()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_localizacao_dpto_id');
    }
    public function almoxarifado_responsavel()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_responsavel_id');
    }

    public function almoxarifado_tipo()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_tipo_id');
    }

    public function almoxarifado_marca()
    {
        return $this->belongsToMany('App\Models\DAF\Almoxarifado', 'almoxarifado_marca_id');
    }
}
