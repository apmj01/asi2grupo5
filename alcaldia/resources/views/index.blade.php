@extends('layouts.login')

@section('content')



<div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="#">
            <img class="center" alt="logo" src="img/logo.png" width="500">
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
     
            {!!Form::open(['url' => 'panel', 'method'=>'POST'])!!}

                <div class="metro double-size green">
                    <div class="input-append lock-input">
                        {!!Form::text('name',null,['placeholder'=>'Usuario'])!!}
                    </div>
                </div>

                <div class="metro double-size yellow">
                    <div class="input-append lock-input">
                        {!!Form::password('password',['placeholder'=>'Clave'])!!}
                    </div>
                </div>

                <div class="metro single-size terques login">
                    {!!Form::submit('Ingresar',['class'=>'btn login-btn'])!!} 
                </div>

                <div class="login-footer">

                    <div class="remember-hint pull-left" style="color:black">

                        {!!Form::checkbox('Recordar')!!}

                         Recordar Usuario

                    </div>

                    <div class="forgot-hint pull-right" >
                        <a style="color:black" id="forget-password" class="" href="javascript:;">Olvido su Clave?</a>
                    </div>

                </div>

            {!!Form::close()!!}
       
        
        
    </div>

    @stop