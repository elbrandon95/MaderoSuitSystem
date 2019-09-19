<?php

namespace App\Models\Security;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = 'usuario';
    protected $fillable = ['usuario', 'nombre', 'password'];
    protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuarioRol', 'idUsuario', 'idRol');
    }

    public function setSession($roles)
    {
        if (count($roles) == 1) {
            Session::put(
                [
                    'idRol' => $roles[0]['id'],
                    'nombreRol' => $roles[0]['nombre'],
                    'usuario' => $this->usuario,
                    'idUsuario' => $this->id,
                    'nombreUsuario' => $this->nombre,
                    'apellidoPaterno' => $this->apellidoPaterno
                ]
            );
        }
    }
}

