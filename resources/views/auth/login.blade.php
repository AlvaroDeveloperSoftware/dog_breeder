@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center" style="margin-top: 11px;color: #4f4f4f;">Iniciar Sesión</h1><!-- Start: Login Form Basic -->
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body shadow-lg d-flex flex-column align-items-center" style="color: var(--bs-blue);background: #91686d;">
                            <form class="text-center" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3"></div>
                                <label class="form-label" style="color: rgb(0,0,0);">EMAIL</label>
                                <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <label class="form-label" style="margin: 14px;color: rgb(0,0,0);">CONTRASEÑA</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="mb-3"></div>
                                <div class="mb-3">
                                    
                                <button class="btn btn-primary" type="submit" style="background: #d99e82;color: rgb(0,0,0);border-radius: 15;padding: 6px 12px;text-align: center;border-color: #cccccc;font-weight: bold">ENTRAR</button>
                            </div>
                            </form>
                            <div class="row mb-1">
                                <div class="col-md-6 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" style="color: #4f4f4f" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" style="color: #4f4f4f" for="remember">
                                            {{ __('Recordarme') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" style="border-width: 0px;border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;background: rgba(13,110,253,0);color: rgb(0,0,0);margin: 0px;margin-bottom: 37px;" href="{{ route('password.request') }}" >¿Has olvidado tu contraseña?</a>
                            @endif
                            <label class="form-label" style="text-align: center;color: rgb(0,0,0);">¿No tienes cuenta?</label><a href="{{route('register')}}" class="btn btn-primary" type="button" style="background: #91686d;border-style: none;color: #65120d;text-align: center;font-size: 18px;">Registrate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>  
@endsection
