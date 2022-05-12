<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    
    protected $table = 'sexo';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_sexo'
    ];
    protected $guarded = [];
    
    public function serve() {
        return $this->belongsTo(Serve::class, 'sexo_id');
    }
    public function requerimentoAposentadoriaVoluntaria() {
        
        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'sexo_id');
    }
}
