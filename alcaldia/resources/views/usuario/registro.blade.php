@extends('layouts.principal')

@section('content')

 <div class="row-fluid">
                <div class="span12">
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

                                <div class="control-group ">
                                    {!!Form::label('Nombre (*)',null,['class' => 'control-label', 'for' => 'firstname'])!!}
                                    <div class="controls">
                                        {!!Form::text('firstname',null,['class' => 'span6', 'id' => 'firstname'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    {!!Form::label('Apellido (*)',null,['class' => 'control-label', 'for' => 'lastname'])!!}
                                    <div class="controls">
                                        {!!Form::text('lastname',null,['class' => 'span6', 'id' => 'lastname'])!!}
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    {!!Form::label('Usuario (*)',null,['class' => 'control-label', 'for' => 'username'])!!}
                                    <div class="controls">
                                        {!!Form::text('username',null,['class' => 'span6', 'id' => 'username'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    {!!Form::label('Contraseña (*)',null,['class' => 'control-label', 'for' => 'password'])!!}
                                    <div class="controls">
                                        {!!Form::password('password',['class' => 'span6', 'id' => 'password'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    {!!Form::label('Confirmar Contraseña (*)',null,['class' => 'control-label', 'for' => 'confirm_password'])!!}
                                    <div class="controls">
                                        {!!Form::password('confirm_password',['class' => 'span6', 'id' => 'confirm_password'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    {!!Form::label('Email (*)',null,['class' => 'control-label', 'for' => 'email'])!!}
                                    <div class="controls">
                                        {!!Form::email('email',null,['class' => 'span6', 'id' => 'email'])!!}
                                    </div>
                                </div>

                                  <div class="control-group">
                                    {!!Form::label('Estado del Usuario(*)',null,['class' => 'control-label'])!!}
                                    <div class="controls">
                                        {!!Form::select('Estado del Usuario(*)',array('1' => 'Activo', '2' => 'Inactivo'), null ,['name' => 'estado','id' => 'estado', 'class' => 'span6', 'placeholder' => 'Seleccionar...'])!!}
                                    </div>
                                </div>

                                <div class="control-group">
                                    {!!Form::label('Rol del Usuario(*)',null,['class' => 'control-label'])!!}
                                    <div class="controls">
                                        {!!Form::select('Rol del Usuario(*)',array('1' => 'Administrador', '2' => 'Supervisor Mercado', '3' => 'Agente Mercado'), null ,['name' => 'rol','id' => 'rol', 'class' => 'span6', 'placeholder' => 'Seleccionar...'])!!}
                                    </div>
                                </div>

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