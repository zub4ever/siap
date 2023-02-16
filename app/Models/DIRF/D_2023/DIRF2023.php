<?php

namespace App\Models\DIRF\D_2023;

use Illuminate\Database\Eloquent\Model;

class DIRF2023 extends Model {

    protected $table = 'documentos';
    public $timestamps = true;
    protected $fillable = [
        'txt_path',
        'pdf_path',
        'cpf'
    ];
    protected $guarded = [];

}
