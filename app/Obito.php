<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obito extends Model
{
    protected $table = 'obito';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_obito'
    ];
    protected $guarded = [];
    public function serve() {
        return $this->hasMany(Serve::class, 'obito_id');
    }
}
