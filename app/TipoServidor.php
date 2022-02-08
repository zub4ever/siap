<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServidor extends Model
{
    protected $table = 'tpservidor';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_tpservidor'
    ];
    protected $guarded = [];
    public function serve() {
        
        return $this->belongsTo(Serve::class, 'tp_servidor_id');
    }
}
