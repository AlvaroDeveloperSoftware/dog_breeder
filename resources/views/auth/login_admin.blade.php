<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Admin</title>

    <link rel="icon" href="{{ url('assets/logoDogBreeder.PNG') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #d0bbbb">
   
<div class="container">
    <h1 class="text-center" style="margin-top: 11px;color: #4f4f4f;">Iniciar Sesión</h1><!-- Start: Login Form Basic -->
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body shadow-lg d-flex flex-column align-items-center" style="color: var(--bs-blue);background: #ad8f92;">
                            <form class="text-center" method="POST" action="{{ route('admin.login.post') }}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
</body>
</html>
  
