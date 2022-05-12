<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marital_Status extends Model {

    protected $table = 'marital_status';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'status_civil'
    ];
    protected $guarded = [];
    
    public function serve() {
        
        return $this->hasOne(Serve::class, 'marital_status_id');
    }
    public function requerimentoAposentadoriaVoluntaria() {
        
        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'marital_status_id');
    }

}
