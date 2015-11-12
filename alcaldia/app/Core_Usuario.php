<?php

namespace Alcaldia;

use Illuminate\Database\Eloquent\Model;

class Core_Usuario extends Model
{
    protected $table = 'core_usuarios';

    protected $fillable = ['nombre', 'apellido', 'usuario', 'clave', 'email', 'estado', 'core_role_id'];
}
