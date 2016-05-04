@extends('app')
 
@section('body')
<div class="row">
  <div class="medium-6 medium-centered large-4 large-centered columns">
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}
      <div class="row column log-in-form">
        <h4 class="text-center">Sistema de gestión de deportes.</h4>
        <h6 class="text-center">Por favor, registre su información.</h6>
        <label>Nombre
          <input type="text" name="name" placeholder="Nombre o apodo">
        </label>
        <label>Email
          <input type="email" name="email" placeholder="algo@dominio.com">
        </label>
        <label>Contraseña
          <input type="password" name="password" id="password" placeholder="Contraseña">
        </label>
        <label>Verificar contraseña
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Volver a ingresar contraseña">
        </label>
        <input id="show-password" type="checkbox"><label for="show-password">Mostrar contraseña</label>
        <input type="submit" class="button expanded" value="Registrar nuevo usuario">
        <p class="text-center"><a href="/password/email">Olvidaste la contraseña?.</a></p>
        <p class="text-center"><a href="/auth/login">Conoces tu usuario? Inicia sesión.</a></p>
      </div>
    </form>
  </div>
</div>
@endsection