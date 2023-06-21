<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable {

    use Notifiable,
        HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function conselho_documento() {

        return $this->belongsToMany(\App\Models\Conselhos\ConselhoDocumentos::class, 'user_id');
    }
    public function processos_tce() {

        return $this->belongsToMany(\App\Models\ProcessosHomologadosTCE\ProcessosTCE::class, 'user_id');
    }
    public function aposentadorias() {

        return $this->belongsToMany(\App\Models\DIPREV\Aposentadorias\Aposentadorias::class, 'user_id');
    }

    public function almo_virtual_contrato() {

        return $this->belongsToMany('\App\Models\DAF\AlmoxarifadoVirtual\AlmoVirtualContratoEmpenho', 'users_id');
    }

}
