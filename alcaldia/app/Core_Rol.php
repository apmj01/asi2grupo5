<?php

namespace Alcaldia;

use Illuminate\Database\Eloquent\Model;

class Core_Rol extends Model
{
        protected $table = 'core_roles';
        protected $fillable = ['tipo_rol'];

}
