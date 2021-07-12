<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serve extends Model {

    protected $table = 'serve';
    public $timestamps = true;
    protected $fillable = [
        'nm_servidor',
        'matricula',
        'data_nascimento',
        'rg',
        'cpf',
        'pis_pasep',
        'nm_pai',
        'nm_mae',
        'marital_status_id',
        'origin_id',
         
        'sexo_id',
        'obito_id', 
        
       'type_serve_id',
        
         'orgao_expedidor_id' 
    ];
      protected $guarded = [];

    public function origin() {
        return $this->hasMany(Origin::class, 'origin_id');
    }
    
    public function marital_status() {

        return $this->hasMany(Marital_Status::class, 'marital_status_id');
    }


    public function type_serve() {

        return $this->belongsTo(Type_Serve::class, 'type_serve_id');
    }


    public function sexo() {

        return $this->belongsToMany(Sexo::class, 'sexo_id');
    }

    public function obito() {

        return $this->belongsToMany(Obito::class, 'obito_id');
    }

    public function orgao_expedidor() {

        return $this->belongsToMany(Orgao_Expedidor::class, 'orgao_expedidor_id');
    } 
}
