<?php

namespace App\Models\FolhaPagamento;

use Illuminate\Database\Eloquent\Model;

class FolhaPagamento extends Model {
    protected $table = 'folhapagto';
    public $timestamps = true;
    protected $fillable = [
    'ano',
    'mes',
    'qtdAposentadoFffin',
    'qtdAposentadoFprev',
    'qtdPensionistaFfin',
    'qtdPensionistaFprev',
    'qtdTotalFfin',
    'qtdTotalFprev',
    'valorAposFfin',
    'valorAposFprev',
    'valorPenFfin',
    'valorPenFprev',
    'valorTotalFfin',
    'valorTotalFprev'
    ];
    protected $guarded = [];
}
