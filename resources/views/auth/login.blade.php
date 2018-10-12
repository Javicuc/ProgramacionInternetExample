@extends('layouts.app')
@section('content')
<section class="material-half-bg">
  <div class="cover"></div>
</section>
<section class="login-content">
  <div class="logo">
    <h1>Asistencia</h1>
  </div>
  <div class="login-box">
    <form class="login-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    @csrf
      <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3>
      
      <div class="form-group">
        
        <label for="email" class="control-label">{{ __('Correo Electrónico') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo" required autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
      
      <div class="form-group">
        <label for="password" class="control-label">{{ __('Contraseña') }}</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      
      <div class="form-group">
        <div class="utility">
          <div class="animated-checkbox">
            <label>
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="label-text">Recordar</span>
            </label>
          </div>
          <a class="semibold-text mb-2" href="{{ route('password.request') }}">{{ __('Contraseña Olvidada?') }}
          </div>
        </div>
        
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('Entrar') }}</button>
        </div>
      </form>
    </div>
  </section>
  @endsection