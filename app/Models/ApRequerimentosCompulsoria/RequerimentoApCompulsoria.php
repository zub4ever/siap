<?php


namespace App\Models\ApRequerimentosCompulsoria;

use Illuminate\Database\Eloquent\Model;

class RequerimentoApCompulsoria extends Model
{

    protected $table = 'requerimento_aposentadoria_compulsoria';
    public $timestamps = true;
    protected $fillable = [
        'nm_requerente',

    ];


    public function requerimento_aposentadoria_compulsoria()
    {
        return $this->belongsTo('App\Models\ApRequerimentosCompulsoria\RequerimentoApCompulsoria', 'requerimento_aposentadoria_compulsoria_id');
    }


}
