<?php

namespace Alcaldia\Http\Controllers;
use DB;
use Redirect;
use Session;
use Alcaldia\Http\Requests\UsuarioCreateRequest;
use Illuminate\Http\Request;
use Alcaldia\User;
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


        $users = DB::table('users')
            ->join('core_rols', 'users.core_rol_id', '=', 'core_rols.id')
            ->select('users.*', 'core_rols.descripcion_rol')
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

   User::create([

    'name' => $request['name'],
    'lastname' => $request['lastname'], 
    'password' => bcrypt($request['password']),
    'email' => $request['email'], 
    'status' => $request['status'],
    'core_rol_id' => $request['core_rol_id'],
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

     $user = User::find($id);
     $roles = Core_Rol::all()->lists('descripcion_rol','id');
     $selected = array();
  
      return view('usuario.actualizar', compact('user','roles', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
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
        User::destroy($id_usuario);

        Session::flash('message','Usuario Eliminado Correctamente');

         return Redirect::to('/usuario');
    }
}
