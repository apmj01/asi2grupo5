<?php

namespace Alcaldia;

use Illuminate\Database\Eloquent\Model;

class Core_Rol extends Model
{
    protected $table = 'core_rols';
     protected $fillable = ['descripcion_rol'];
     public $timestamps = false;
}
