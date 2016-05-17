@extends('app')
 
@section('body')
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
  <div class="logo">Ingreso</div>
  <!-- Main Form -->
  <div class="login-form-1">
    <form id="login-form" class="text-left" method="POST" action="/auth/login">
        {!! csrf_field() !!}
      <div class="login-form-main-message">Por favor ingrese sus credenciales</div>
      <div class="main-login-form">
        <div class="login-group">
          <div class="form-group">
            <label for="lg_username" class="sr-only">Email</label>
            <input type="email" class="form-control" id="lg_username" name="email" placeholder="algo@dominio.com">
          </div>
          <div class="form-group">
            <label for="lg_password" class="sr-only">Contraseña</label>
            <input type="password" class="form-control" id="lg_password" name="password" placeholder="contraseña">
          </div>
          <div class="form-group login-group-checkbox">
            <input type="checkbox" id="lg_remember" name="remember">
            <label for="lg_remember">Recordar</label>
          </div>
        </div>
        <button type="submit" class="login-button"><i class="glyphicon glyphicon-chevron-right"></i></button>
      </div>
      <div class="etc-login-form">
        <p>Olvidaste la contraseña? <a href="/password/email">Haz click aquí</a></p>
        <p>Eres nuevo? <a href="/auth/register">Regístrate</a></p>
      </div>
    </form>
  </div>
  <!-- end:Main Form -->
</div>
@endsection