<?php

namespace Alcaldia\Http\Controllers;

use Illuminate\Http\Request;

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

    return view('mercado');
   }

    public function mercado_solicitudes(){

    return view('mercado_solicitudes');
   }

    public function registro(){

    return view('registro');
   }

}
