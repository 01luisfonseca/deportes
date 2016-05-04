@extends('app')
 
@section('body')
<div class="row">
  <div class="medium-6 medium-centered large-4 large-centered columns">
    <form method="POST" action="/password/reset">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
      <div class="row column log-in-form">
        <h4 class="text-center">Sistema de gestión de deportes.</h4>
        <h6 class="text-center">Por favor, registre su información.</h6>
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <label>Email
          <input type="email" name="email" value="{{ old('email') }}">
        </label>
        <label>Contraseña
          <input type="password" name="password" id="password" placeholder="Contraseña nueva">
        </label>
        <label>Verificar contraseña
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Volver a ingresar contraseña">
        </label>
        <input id="show-password" type="checkbox"><label for="show-password">Mostrar contraseña</label>
        <input type="submit" class="button expanded" value="Reiniciar contraseña">
      </div>
    </form>
  </div>
</div>
@endsection