<?php

namespace App\Models\DAP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DAP_API extends Model
{
    use HasFactory;


//    public $boleto;
    protected $table = 'bol_dap';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $casts = [

        'numero',
        'numeroCarteira',
        'numeroVariacaoCarteira',
        'codigoCliente',
        'linhaDigitavel',
        'codigoBarraNumerico',
        'numeroContratoCobranca'


    ];
    protected $guarded = [];


}
