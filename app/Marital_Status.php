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
        return $this->hasMany(Serve::class, 'marital_status_id');
    }

}
