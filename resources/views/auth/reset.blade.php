@extends('app')
 
@section('body')
<div class="text-center" style="padding:50px 0">
  <div class="logo">Recuperación</div>
  <!-- Main Form -->
  <div class="login-form-1">
    <form id="forgot-password-form" class="text-left" method="POST" action="/password/reset">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
      <div class="etc-login-form">
        <p>Actualiza la contraseña. Asegurate de que el correo electrónico corresponde a la cuenta.</p>
      </div>
      <div class="login-form-main-message">
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
      </div>
      <div class="main-login-form">
        <div class="login-group">
          <div class="form-group">
            <label for="fp_email" class="sr-only">Email</label>
            <input type="text" class="form-control" id="fp_email" name="email" placeholder="email" value="{{ old('email') }}">
          </div>
          <div class="form-group">
            <label for="reg_password" class="sr-only">Nueva contraseña</label>
            <input type="password" class="form-control" id="reg_password" name="password" placeholder="contraseña">
          </div>
          <div class="form-group">
            <label for="reg_password_confirm" class="sr-only">Confirmar contraseña</label>
            <input type="password" class="form-control" id="reg_password_confirm" name="password_confirmation" placeholder="confirmar contraseña">
          </div>
        </div>
        <button type="submit" class="login-button"><i class="glyphicon glyphicon-chevron-right"></i></button>
      </div>
      <div class="etc-login-form">
        <p>Ya tienes cuenta? <a href="/auth/login">Inicia sesión.</a></p>
        <p>Eres nuevo? <a href="/auth/register">Regístrate</a></p>
      </div>
    </form>
  </div>
  <!-- end:Main Form -->
</div>
@endsection