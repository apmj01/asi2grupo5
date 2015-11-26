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


public function __construct(){

$this->middleware('auth', ['only' => 'panel']);

}

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

       public function cementerio(){

    return view('cementerio/index');

   }

       public function desechos_solidos(){

    return view('desechos_solidos/index');

   }
   


     public function estado_familiar(){

    return view('estado_familiar/index');

   }


    public function mercado(){

    return view('mercado/mercado');
   }

    public function mercado_solicitudes(){

    return view('mercado/mercado_solicitudes');
   }

    public function registro(){

      $roles = Core_Rol::all()->lists('descripcion_rol','id');
      $selected = array();
      return view('usuario.registro', compact('roles', 'selected'));

   }



     public function buscar_usuario(){

    return view('buscar_usuario');
   }

   

}
