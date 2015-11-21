<?php

namespace Alcaldia;

use Illuminate\Database\Eloquent\Model;

class Core_Rol extends Model
{
        protected $table = 'core_roles';
        protected $primaryKey = 'id_rol';
        protected $fillable = ['descripcion_rol'];
        public $timestamps = false;

}
