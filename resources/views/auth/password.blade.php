@extends('app')
 
@section('body')
<div class="text-center" style="padding:50px 0">
  <div class="logo title">Recuperación</div>
  <!-- Main Form -->
  <div class="login-form-1">
    <form id="forgot-password-form" class="text-left" method="POST" action="/password/email">
        {!! csrf_field() !!}
      <div class="etc-login-form">
        <p>Ingresa el correo electrónico de la cuenta. Recibirás de vuelta un enlace para crear una nueva contraseña.</p>
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
            <input type="text" class="form-control" id="fp_email" name="email" placeholder="email">
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