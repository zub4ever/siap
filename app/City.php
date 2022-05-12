<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    public $timestamps = true;
    protected $fillable = [
        'nm_estado'
    ];
    protected $guarded = [];

   
    public function address() {
        return $this->belongsTo(Address::class, 'city_id');
    }
    
    
    public function requerimentoAposentadoriaVoluntaria() {
        
        return $this->belongsTo('App\Models\ApRequerimentos\RequerimentoAposentadoriaVoluntaria', 'city_id');
    }
}
