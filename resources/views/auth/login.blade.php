@extends('app')
 
@section('body')
<div class="row">
  <div class="medium-6 medium-centered large-4 large-centered columns">
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
      <div class="row column log-in-form">
        <h4 class="text-center">Sistema de gestión de deportes.</h4>
        <h6 class="text-center">Por favor, entre con su cuenta de correo.</h6>
        <label>Email
          <input type="email" name="email" placeholder="algo@dominio.com">
        </label>
        <label>Contraseña
          <input type="password" name="password" id="password" placeholder="Contraseña">
        </label>
        <input id="remember" type="checkbox" name="remember"><label for="remember">Recordar usuario</label>
        <input id="show-password" type="checkbox"><label for="show-password">Mostrar contraseña</label>
        <input type="submit" class="button expanded" value="Entrar">
        <p class="text-center"><a href="/password/email">Olvidaste la contraseña?</a></p>
        <p class="text-center"><a href="/auth/register">Eres nuevo?... Regístrate</a></p>  
      </div>
    </form>
  </div>
</div>
@endsection