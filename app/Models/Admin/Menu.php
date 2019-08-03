<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre','url','icono'];
    protected $guarded = [''];
    public $timestamps = false;
}
