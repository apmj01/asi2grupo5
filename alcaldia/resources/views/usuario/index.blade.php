@extends('layouts.principal')


@section('content')

@if(Session::has('message'))
<div class="alert alert-block alert-success fade in">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <h4 class="alert-heading">Proceso Exitoso!</h4>
     <br>
    <p>
         {{Session::get('message')}}
    </p>

</div>
@endif

 <div class="row-fluid">
        <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget red">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Lista de Usuarios del Sistema</h4>
                           <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         
                         </div>
                         <div class="widget-body">
                           
                                                       
                                 <table class="table table-striped table-bordered" id="sample_1">
                                     <thead>
                                     <tr>
                                         <th class="">Nombre</th>
                                         <th class="">Apellido</th>
                                         <th class="">Usuario</th>
                                         <th class="">Estado</th>
                                         <th class="">Rol</th>
                                    
                                         <th>Actualizar</th>
                                         <th>Eliminar</th>
                                     </tr>
                                     </thead>
                                     @foreach($users as $user)
                                     <tbody>
                                     <tr class="odd gradeX">
                                        
                                         <td>{{$user -> name}}</td>
                                        <td>{{$user -> lastname}}</td>
                                         <td>{{$user -> email}}</td>

                                          
                                         @if ($user -> status == "1")

                                            <td>Activo</td> 
                                        @else
                                            <td>Inactivo</td> 
                                            @endif

                                       
                                         <td>{{$user -> descripcion_rol}}</td>  
                                                                      

                                      <td> {!!link_to_route('usuario.edit', $title = 'Actualizar', $parameters = array($user->id), $attributes = array('class'=>'btn btn-warning'))!!} </td>
                                         <td>
                                           {!!Form::open(array('route' => array('usuario.destroy', $user->id), 'method' => 'DELETE'))!!}
                                            {!!Form::submit('Eliminar',['class' =>'btn btn-danger'])!!}
                                            {!!Form::close()!!}
                                     
                                         </td>
                                          
                                     </tr>
                            
                                     </tbody>
                                     @endforeach
                                 </table>
                             
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
    </div>
</div>

     
@stop