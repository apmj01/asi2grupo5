@extends('layouts.principal')

@section('content')

 <div class="row-fluid">
                <div class="span10">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Formulario para Actualizar Datos del Usuario</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">

                            <!-- BEGIN FORM-->
                            {!!Form::model($user, array('route' => array('usuario.update', $user->id), 'method' => 'PUT', 'class' => 'cmxform form-horizontal', 'novalidate' => 'novalidate', 'id' => 'signupForm'))!!}

                                <div class="alert alert-info">
                                    <button class="close" data-dismiss="alert">×</button>
                                    <strong>Info!</strong> Los Campos Marcados con (*) son Requeridos.
                                </div>

                                 @include('usuario.form.user');

                                <div class="form-actions">
                                    {!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!} 
                                  <!--  {!!Form::button('Cancelar',['class'=>'btn'])!!} -->
                                </div>

                            {!!Form::close()!!}


                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>


@stop