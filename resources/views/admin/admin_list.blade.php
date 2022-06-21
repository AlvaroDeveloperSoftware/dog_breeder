<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lista de usuarios registrados</title>

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
            <div style="margin-top: 20px">
					<div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <div class="panel panel-success">               
                            <div class="panel-body">
                                <table class="table table-bordered" style="background-color: lightgrey;border: 3px solid black">
                                    <thead>
                                      <tr>
                                        <th colspan="2" class="text-center">Usuarios Criadores</th>
                                      </tr>
                                      <tr>
                                        <td class="text-center">Nombre</td>
                                        <td class="text-center">Email</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($usersBreeder)<=0 && count($usersNormal<=0))
                                        <tr>
                                            <td colspan="8">No usuarios normales ni criadores</td>
                                        </tr>
                                        @else
                                    @foreach ($usersBreeder as $breeder)
                                    <tr>
                                        <td class="text-center">{{ $breeder->name}}</td>
                                        <td class="text-center">{{ $breeder->email}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
												<thead>
													<tr>
													  <th colspan="2" class="text-center">Usuarios Normales</th>
													</tr>
													<tr>
													  <td class="text-center">Nombre</td>
													  <td class="text-center">Email</td>
													</tr>
													@foreach ($usersNormal as $normal)
													<tr>
														 <td class="text-center">{{ $normal->name}}</td>
														 <td class="text-center">{{ $normal->email}}</td>
													</tr>
													@endforeach
												 </thead>
                                    </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>