<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
        protected $table = 'orgao';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_orgao'
    ];
   protected $guarded = [];
       public function funcao() {
        return $this->hasMany(Funcao::class, 'orgao_id');
    }
     public function requerimentoAposentadoriaVoluntaria() {
        
        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'orgao_id');
    }
}
