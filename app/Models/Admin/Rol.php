<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    protected $fillable = ['id','nombre'];
    public $timestamps = false;

    
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menurol', 'idRol');
    }
}
