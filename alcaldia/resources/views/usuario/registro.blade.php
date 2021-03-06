@extends('layouts.principal')

@section('content')

@if(Session::has('messages'))
<div class="alert alert-block alert-success fade in">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <h4 class="alert-heading">Proceso Exitoso!</h4>
    <p>
         {{Session::get('messages')}}
    </p>
</div>

@endif

 <div class="row-fluid">
                <div class="span10">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Formulario para Usuarios Nuevos</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">

                            <!-- BEGIN FORM-->
                            {!!Form::open(['route'=>'usuario.store', 'method'=>'POST', 'class' => 'cmxform form-horizontal', 'novalidate' => 'novalidate', 'id' => 'signupForm'])!!}

                                <div class="alert alert-info">
                                    <button class="close" data-dismiss="alert">×</button>
                                    <strong>Info!</strong> Los Campos Marcados con (*) son Requeridos.
                                </div>

                              @include('usuario.form.user');

                                <div class="form-actions">
                                    {!!Form::submit('Registrar',['class'=>'btn btn-success'])!!} 
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