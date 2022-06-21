<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home Admin</title>

    <link rel="icon" href="{{ url('assets/logoDogBreeder.PNG') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div style="text-align: center;margin-top:20px">
            <a href="{{ route('admin.logout') }}" class="btn btn-primary" type="button" style="background: #91686d;border-style: none;color: #65120d;text-align: center;font-size: 18px;">Logout</a>
            <a href="{{ route('admin.list') }}" class="btn btn-primary" type="button" style="background: #91686d;border-style: none;color: #65120d;text-align: center;font-size: 18px;">Lista de usuarios</a>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8" style="margin-top: 20px">
                    <div class="card">
                        <div class="card-header">{{ __('Vista Administrador') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            {{ __('Bienvenido administrador: ') }}{{Auth::user()->name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>