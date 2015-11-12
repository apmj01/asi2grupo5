@extends('layouts.principal')

@section('content')

 <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Editable Table</h4>
                         
                         </div>
                         <div class="widget-body">
                             <div>
                           
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                     <thead>
                                     <tr>
                                         <th>Nombre</th>
                                         <th>Apellido</th>
                                         <th>Usuario</th>
                                         <th>Email</th>
                                         <th>Editar</th>
                                         <th>Eliminar</th>
                                     </tr>
                                     </thead>
                                     @foreach($users as $user)
                                     <tbody>
                                     <tr class="">
                                         <td>{{$user->nombre}}</td>
                                         <td>{{$user->apellido}}</td>
                                         <td>{{$user->usuario}}</td>
                                         <td>{{$user->email}}</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                             
                                     </tbody>
                                     @endforeach
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>
@stop