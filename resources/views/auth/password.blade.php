@extends('app')
 
@section('body')
<div class="row">
  <div class="medium-6 medium-centered large-4 large-centered columns">
    <form method="POST" action="/password/email">
        {!! csrf_field() !!}
      <div class="row column log-in-form">
        <h4 class="text-center">Sistema de gestión de deportes.</h4>
        <h6 class="text-center">Por favor, ingrese su correo asociado a la cuenta a restablecer.</h6>
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <label>Email
          <input type="email" name="email" placeholder="algo@dominio.com">
        </label>
        <input type="submit" class="button expanded" value="Enviar enlace de restablecimiento.">
        <p class="text-center"><a href="/auth/login">Conoces tu usuario? Inicia sesión.</a></p>
        <p class="text-center"><a href="/auth/register">Eres nuevo?... Regístrate</a></p>  
      </div>
    </form>
  </div>
</div>
@endsection