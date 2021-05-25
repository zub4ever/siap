<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Serve extends Model
{
    protected $table = 'type_serve';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'status_servidor'
    ];
    protected $guarded = [];
    public function serve() {
        return $this->hasMany(Serve::class, 'type_serve_id');
    }
}
