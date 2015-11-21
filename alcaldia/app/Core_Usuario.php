<?php

namespace Alcaldia;

use Illuminate\Database\Eloquent\Model;


class Core_Usuario extends Model
{
    protected $table = 'core_usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = ['id_usuario', 'clave_acceso', 'nombre', 'apellido', 'dui', 'nit', 'estatus', 'id_rol'];

    public $timestamps = false;

    public function setPasswordAttribute($valor){

if (!empty($valor)){

	$this -> attributes['clave'] = \Hash::make($valor);
}

    }

}
