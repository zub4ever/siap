<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model {
  
    
    protected $table = 'origin';
    /*protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_origem'
    ];
   protected $guarded = [];
    public function serve() {
        return $this->hasMany(Serve::class, 'origin_id');
    }*/

}