@extends('layouts.tabla_editable')

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
                                         <th>Username</th>
                                         <th>Full Name</th>
                                         <th>Points</th>
                                         <th>Notes</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr class="">
                                         <td>Jondi Rose</td>
                                         <td>Alfred Jondi Rose</td>
                                         <td>1234</td>
                                         <td class="center">super user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Dulal</td>
                                         <td>Jonathan Smith</td>
                                         <td>434</td>
                                         <td class="center">new user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Sumon</td>
                                         <td> Sumon Ahmed</td>
                                         <td>232</td>
                                         <td class="center">super user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>vectorlab</td>
                                         <td>dk mosa</td>
                                         <td>132</td>
                                         <td class="center">elite user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Admin</td>
                                         <td> Admin lab</td>
                                         <td>462</td>
                                         <td class="center">new user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Rafiqul</td>
                                         <td>Rafiqul dulal</td>
                                         <td>62</td>
                                         <td class="center">new user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Jhon Doe</td>
                                         <td>Jhon Doe </td>
                                         <td>1234</td>
                                         <td class="center">super user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Dulal</td>
                                         <td>Jonathan Smith</td>
                                         <td>434</td>
                                         <td class="center">new user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Sumon</td>
                                         <td> Sumon Ahmed</td>
                                         <td>232</td>
                                         <td class="center">super user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>vectorlab</td>
                                         <td>dk mosa</td>
                                         <td>132</td>
                                         <td class="center">elite user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Admin</td>
                                         <td> Admin lab</td>
                                         <td>462</td>
                                         <td class="center">new user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>Rafiqul</td>
                                         <td>Rafiqul dulal</td>
                                         <td>62</td>
                                         <td class="center">new user</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>
@stop