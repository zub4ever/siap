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
        return $this->hasMany(Serve::class, 'sexo_id');
    }
}
