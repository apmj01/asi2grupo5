<?php

namespace Alcaldia\Http\Controllers;
use DB;
use Redirect;
use Session;
use Alcaldia\Http\Requests\UsuarioCreateRequest;
use Illuminate\Http\Request;
use Alcaldia\Core_Usuario;
use Alcaldia\Core_Rol;
use Alcaldia\Http\Requests;
use Alcaldia\Http\Controllers\Controller;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $users = Core_Usuario::all();
        
        $users = DB::table('core_usuarios')
            ->join('core_roles', 'core_usuarios.id_rol', '=', 'core_roles.id_rol')
            ->select('core_usuarios.*', 'core_roles.descripcion_rol')
            ->get();
        

        return view('usuario.index', ['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

   Core_Usuario::create([

    'id_usuario' => $request['id_usuario'],
    'clave_acceso' => bcrypt($request['clave_acceso']),
    'nombre' => $request['nombre'],
    'apellido' => $request['apellido'], 
    'dui' => $request['dui'], 
    'nit' => $request['nit'], 
    'estatus' => $request['estatus'],
    'id_rol' => $request['id_rol'],
   ]); 

   Session::flash('messages','Usuario Registrado Correctamente');

    return Redirect::to('/registro');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = Core_Usuario::find($id);

      $roles = Core_Rol::all()->lists('descripcion_rol','id_rol');
      $selected = array();

      return view('usuario.actualizar', compact('user','roles', 'selected') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_usuario)
    {
        $user = core_usuario::find($id_usuario);
        $user -> fill($request->all());
        $user -> save();

         Session::flash('message','Usuario Editado Correctamente');

         return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_usuario)
    {
        Core_Usuario::destroy($id_usuario);

        Session::flash('message','Usuario Eliminado Correctamente');

         return Redirect::to('/usuario');
    }
}
