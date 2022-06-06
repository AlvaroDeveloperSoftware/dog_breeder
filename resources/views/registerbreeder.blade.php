<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registrarme como criador</title>

    <link rel="icon" href="{{ url('assets/logoDogBreeder.PNG') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <body style="background: #d0bbbb;">
            <h1 style="text-align: center;margin-top: 10px;color: #4f4f4f;">Registro de criador</h1>
            <section class="position-relative py-4 py-xl-5">
                <div class="container" style="background: #d0bbbb;">
                    <div class="row d-flex justify-content-center" style="background: #d0bbbb;">
                        <div class="col-md-6 col-xl-4"><div class="card mb-5">
                            <div class="card-body shadow-lg d-flex flex-column align-items-center" style="background: #ad8f92;">
                                <form class="text-center" method="POST" action="{{ route('register.breeder') }}">
                                    @csrf
                                    <label class="form-label">EMAIL</label>
                                    <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" style="margin-top: -5px;">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="mb-3"></div>
                                    <label class="form-label">NOMBRE</label>
                                    <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" style="margin-top: -5px;">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="mb-3"></div><label class="form-label"></label>
                                    <label class="form-label">APELLIDOS</label>
                                    <input name="surnames" class="form-control" type="text" style="margin-top: -5px;">
                                    <div class="mb-3"></div>
                                    <p class="text-muted"></p>
                                    <label class="form-label" style="margin-bottom: 11px;">CONTRASEÑA<br></label>
                                    <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" style="margin-top: -6px;">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label class="form-label" style="margin-top: 5px;">CONFIRMAR CONTRASEÑA</label>
                                    <input name="password" class="form-control" type="password" required autocomplete="new-password">
                                    <label class="form-label" style="margin-top: 5px;">AFIJO</label>
                                    <input name="affix" class="form-control" type="text">
                                    <label class="form-label" style="margin-top: 5px;">RAZA</label>
                                    <input name="breed" class="form-control" type="text">
                                    <label class="form-label" style="margin-top: 5px;">AÑOS DE CRIANZA</label>
                                    <input name="years_breed" class="form-control" type="text">
                                    <label class="form-label" style="margin-top: 5px;">TELEFONO</label>
                                    <input name="phone" class="form-control" type="text">
                                    <label class="form-label" style="margin-top: 5px;">FOTO DE AFIJO</label>
                                    <input name="photo" class="form-control" type="file">
                                    <button class="btn btn-primary" type="submit" style="margin-top: 14px;color: rgb(0,0,0);font-weight: bold;border-radius: 15px;background: #d99e82;">REGISTRARME</button>
                                </form>
                                
                                <label class="form-label" style="margin-top: 16px;font-size: 18px;">¿Tienes cuenta?</label>
                                <a class="card-link" href="{{route('login')}}" style="color: rgb(0,0,0);font-size: 14px;">Iniciar sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>