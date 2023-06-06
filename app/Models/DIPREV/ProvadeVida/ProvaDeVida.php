<?php

namespace App\Models\DIPREV\ProvadeVida;

use Illuminate\Database\Eloquent\Model;

class ProvaDeVida extends Model
{

    protected $table = 'prova_de_vida';
    public $timestamps = true;
    protected $fillable = [
        'matricula',
        'cpf',
        'data_nascimento',
        'nr_telefone',
        'nm_rua',
        'nr_casa',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'foto_doc_frente',
        'foto_doc_verso',
        'foto_doc_facial',
        'prova_de_vida_status_id',
        'prova_de_vida_ano',
    ];
    protected $guarded = [];

    public function provadevida()
    {
        return $this->belongsToMany(\App\Models\DIPREV\ProvadeVida\ProvaDeVidaStatus::class, 'prova_de_vida_status_id');
    }



}