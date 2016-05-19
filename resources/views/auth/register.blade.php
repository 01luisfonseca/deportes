@extends('app')
 
@section('body')

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
  <div class="logo title">Registro</div>
  <!-- Main Form -->
  <div class="login-form-1">
    <form id="register-form" class="text-left" method="POST" action="/auth/register">
    {!! csrf_field() !!}
      <div class="login-form-main-message">Área para dar de alta a usuarios</div>
      <div class="main-login-form">
        <div class="login-group">
          <div class="form-group">
            <label for="reg_username" class="sr-only">Nombre o apodo </label>
            <input type="text" class="form-control" id="reg_username" name="name" placeholder="nombre">
          </div>
          <div class="form-group">
            <label for="reg_password" class="sr-only">Contraseña</label>
            <input type="password" class="form-control" id="reg_password" name="password" placeholder="contraseña">
          </div>
          <div class="form-group">
            <label for="reg_password_confirm" class="sr-only">Confirmar contraseña</label>
            <input type="password" class="form-control" id="reg_password_confirm" name="password_confirmation" placeholder="confirmar contraseña">
          </div>
          
          <div class="form-group">
            <label for="reg_email" class="sr-only">Email</label>
            <input type="email" class="form-control" id="reg_email" name="email" placeholder="email">
          </div>

        <button type="submit" class="login-button"><i class="glyphicon glyphicon-chevron-right"></i></button>
      </div>
      <div class="etc-login-form">
        <p>Ya tienes cuenta? <a href="/auth/login">Inicia sesión.</a></p>
        <p>Olvidaste tu contraseña? <a href="/password/email">Recupérala.</a></p>
      </div>
    </form>
  </div>
  <!-- end:Main Form -->
</div>
@endsection