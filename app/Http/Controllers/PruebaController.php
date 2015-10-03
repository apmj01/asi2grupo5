<?php

namespace Mayoralty\Http\Controllers;

class PruebaController extends Controller
{
    public function index(){
    	return "Hola desde el controlador";
    }
    
    public function nombre($nombre){
    	return "Hola Mi nombre es: " . $nombre;
    }
}
