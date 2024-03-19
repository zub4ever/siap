<?php

namespace App\Models\DIRF;

use Illuminate\Database\Eloquent\Model;

class DirfCedulaC extends Model
{

    protected $table = 'cedula_c';
    public $timestamps = true;
    protected $fillable = [
        'cpf',
        'nome',
        'anoExercicio',
        'caminhodoarquivo',
        'id_usuario',
    ];
    protected $guarded = [];

}