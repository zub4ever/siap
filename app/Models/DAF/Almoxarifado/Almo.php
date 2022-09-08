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
		'almoxarifado_cedido_id',
        'status',
		'cedido_localizacao'

    ];
    protected $guarded = [];

    public function almoxarifado_condicao()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoCondicao', 'almoxarifado_condicao_id');
    }
    public function almoxarifado_contrato()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoContrato', 'almoxarifado_contrato_id');
    }
    public function almoxarifado_localizacao_dpto()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoLocalizacaoDPTO', 'almoxarifado_localizacao_dpto_id');
    }
    public function almoxarifado_responsavel()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoResponsavel', 'almoxarifado_responsavel_id');
    }

    public function almoxarifado_tipo(){
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoTipo', 'almoxarifado_tipo_id');
    }

    public function almoxarifado_marca()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoMarca', 'almoxarifado_marca_id');
    }
	public function almoxarifado_cedido()
    {
        return $this->belongsTo('App\Models\DAF\Almoxarifado\AlmoCedido', 'almoxarifado_cedido_id');
    }

    public static function busca($criterio)
    {
      return static::where('nm_patrimonio', '=', $criterio)->get();
    }
    public static function buscaQrCode($id)
    {
      return static::where('id', '=', $id)->get();
    }

    public static function QrCodeGera($id)
    {
      return static::where('id', '=', $id)->get();
    }
}
