<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
     protected $table = 'serve';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
           'nm_servidor',  
           'matricula',
           'sexo',
           'data_nascimento',
           'rg',
           'cpf',
           'pis_pasep',
           'nm_pai',
           'nm_mae',
           'telefone',
           'email',
           'obito',
           'origin_id',
           'type_serve_id',
           'marital_status_id'
           

    ];
    protected $guarded = [];
    
     public function origin(){
          return $this->belongsTo(Origin::class,'origin_id');
    }
    public function type_serve(){
         
          return $this->belongsTo(Type_Serve::class,'type_serve_id');
   }
    public function marital_status(){

          return $this->belongsTo(Denounced::class,'marital_status_id');
    }
 
    
}
