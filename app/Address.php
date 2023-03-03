<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    protected $table = 'address';
    public $timestamps = true;
    protected $fillable = [
        'nm_rua',
        'nr_casa',
        'complemento',
        'state_id',
        'city_id',
        'serve_id',
        'status'
    ];
    
    protected $guarded = [];

   
    public function state() {
        return $this->hasMany(State::class, 'state_id');
    }

    public function serve() {
        return $this->hasMany(Serve::class, 'serve_id');
    }

    public function city() {
        return $this->hasMany(City::class, 'city_id');
    }
    public function ctc() {
        return $this->hasMany(\App\Models\DIPREV\CTC::class, 'address_id');
    }

}
