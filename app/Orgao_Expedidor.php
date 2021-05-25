<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgao_Expedidor extends Model
{
        protected $table = 'orgao_expedidor';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'nm_orgao'
    ];
    protected $guarded = [];
    public function serve() {
        return $this->hasMany(Serve::class, 'orgao_expedidor_id');
    }
}
