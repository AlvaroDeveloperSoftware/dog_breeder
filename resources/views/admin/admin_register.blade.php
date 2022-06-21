<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registrarme como administrador</title>

    <link rel="icon" href="{{ url('assets/logoDogBreeder.PNG') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
        <body style="background: #d0bbbb;">
            <div class="container">
            <h1 style="text-align: center;margin-top: 10px;color: #4f4f4f;">Registro</h1>
            <section class="position-relative py-4 py-xl-5"><div class="container" style="background: #dd2e44a6;">
                <div class="row d-flex justify-content-center" style="background: #d0bbbb;">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-5">
                            <div class="card-body shadow-lg d-flex flex-column align-items-center" style="background: #ad8f92;">
                        <form class="text-center" method="POST" action="{{ route('admin.register') }}">
                            @csrf
                            <label class="form-label">EMAIL</label>
                            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" style="margin-top: -5px;" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <div class="mb-3"></div>
                            <label class="form-label">NOMBRE</label>
                            <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" type="text" style="margin-top: -5px;">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="mb-3"></div>
                            <label class="form-label" style="margin-bottom: 11px;">CONTRASEÑA<br></label>
                            <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" style="margin-top: -6px;" required autocomplete="new-password">

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                                
                            <label class="form-label" style="margin-top: 5px;">CONFIRMAR CONTRASEÑA</label>
                            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                            <button class="btn btn-primary" type="submit" style="margin-top: 20px;color: rgb(0,0,0);font-weight: bold;border-radius: 15px;background: #d99e82; margin-bottom: 15px;">REGISTRARME</button>
                        </form>
                        <label class="form-label" style="margin-top: 16px;font-size: 18px;">¿Tienes cuenta?</label>
                        <a href="{{route('admin.login.view')}}" class="btn btn-primary" type="button" style="background: #91686d;border-style: none;color: #65120d;text-align: center;font-size: 18px;">Iniciar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>