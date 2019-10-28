@extends('layouts.admin')

@section('title', 'Login')

@section('contenido')
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="brand">
            <!--<img class="brand-img" src="{{ url('adminAssets/assets/images/logo.png')}}" alt="...">-->
            <h2 class="brand-text">AOPIP</h2>
        </div>
        <p>Inicie sesión</p>
        <form method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            {!! $errors->first('session', '<span class="help-block invalid-feedback">:message</span>') !!}
            <div class="form-group">
                <label class="sr-only" for="inputEmail">Correo electrónico</label>
                <input type="email" class="form-control {{ $errors->has('email')? 'is-invalid':'' }}" id="inputEmail" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
                {!! $errors->first('email', '<span class="help-block invalid-feedback">:message</span>') !!}
            </div>
            <div class="form-group">
                <label class="sr-only" for="inputPassword">Contraseña</label>
                <input type="password" class="form-control {{ $errors->has('contrasena')? 'is-invalid':'' }}" id="inputPassword" name="contrasena" placeholder="Contraseña">
                {!! $errors->first('contrasena', '<span class="help-block invalid-feedback">:message</span>') !!}
            </div>
            <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                    <input type="checkbox" id="inputCheckbox" name="remember">
                    <label for="inputCheckbox">Recuérdame</label>
                </div>
                <!--<a class="float-right" href="forgot-password.html">¿Olvidó su contraseña?</a>-->
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
        </form>
        <!--<p>¿No tienes cuenta? <a href="register.html">Regístrate</a></p>-->

        <footer class="page-copyright page-copyright-inverse">
            <p>INICIO DE SESIÓN POR Miguel Angel Alcalá Rios</p>
            <p>© 2019. All RIGHT RESERVED.</p>
        </footer>
    </div>
</div>
<!-- End Page -->
@endsection