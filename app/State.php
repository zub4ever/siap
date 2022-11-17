<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
   protected $table = 'state';
    public $timestamps = true;
    protected $fillable = [
        'nm_estado'
    ];
    protected $guarded = [];

   
    public function address() {
        return $this->belongsTo(Address::class, 'state_id');
    }

   public function atendimento() {
        return $this->belongsTo(Atendimento::class, 'state_id');
    }
}
