<?php

namespace Alcaldia\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Alcaldia\Core_Rol;
use Session;
use Alcaldia\Http\Requests;
use Alcaldia\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

   public function index(){

    return view('index');
   }

   

    public function panel(){

    return view('panel');

   }

    public function mercado(){

    return view('mercado/mercado');
   }

    public function mercado_solicitudes(){

    return view('mercado/mercado_solicitudes');
   }

    public function registro(){

      $roles = Core_Rol::all()->lists('descripcion_rol','id_rol');
      $selected = array();
      return view('usuario.registro', compact('roles', 'selected'));


    //return view('usuario/registro');
   }



     public function buscar_usuario(){

    return view('buscar_usuario');
   }

   public function desechos(){

    return view('desechos/desechos');
   }

    public function desechos_solicitudes(){

    return view('desechos/desechos_solicitudes');
   }
   
       public function resolucion_solicitudes(){

    return view('desechos/resolucion_solicitudes');
   }
   
       public function asignacion_solicitudes(){

    return view('desechos/asignacion_solicitudes');
   }
}
