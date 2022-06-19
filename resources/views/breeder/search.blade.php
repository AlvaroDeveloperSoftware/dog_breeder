<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Búsqueda de ejemplares</title>

    <link rel="icon" href="{{ url('assets/logoDogBreeder.PNG') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>


        .w-5{
            display: none;
            justify-content: center;
        }
        </style>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
        <body style="background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65));">
            <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
                <div class="container">
                    <nav class="navbar navbar-light navbar-expand-md">
                        <img src="/assets/logoDogBreeder.png" style="width: 150px; height:100px;margin-right: 50px"/>
                        <div class="container-fluid">
                            <button data-bs-toggle="collapse" data-bs-target="#navcol-6" class="navbar-toggler">
                                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="navbar-nav">
                                    <li class="nav-item"></li>
                                    <li class="nav-item"></li>
                                    <li class="nav-item"></li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item"></li>
                                    <li class="nav-item"></li>
                                    <li class="nav-item"></li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('breeder.home')}}">INICIO</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('config')}}">CONFIGURACION</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('farm.view')}}">MI CRIADERO</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('search')}}">BUSQUEDA DE EJEMPLARES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('culture')}}">CULTURA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">EXPOSICIONES</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-6">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item"></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                        <div class="d-md-none my-2">
                            <div class="d-md-none my-2">
                                <a class="btn btn-primary" href="{{route('config')}}" style="color: black">CONFIGURACION</a>
                                <a class="btn btn-primary" href="{{route('farm.view')}}" style="color: black">MI CRIADERO</a>
                                <a class="btn btn-primary" href="{{route('search')}}" style="color: black">BUSQUEDA DE EJEMPLARES</a>
                                <a class="btn btn-primary" href="{{route('culture')}}" style="color: black">CULTURA</a>
                                <a class="btn btn-primary" href="#" style="color: black">EXPOSICIONES</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block"></div>
                </div>
            </nav>
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3"></span><span class="site-heading-lower"></span></h1>
    <section>
        <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <img src="/assets/buscar.png" style="width:100px;height:75px";/>
                    <h2>BÚSQUEDA DE EJEMPLARES</h2>
                    <p>Busca los ejemplares que quiera, si no los encuentra comuniquese con el desarrollador para que los introduzca en el sistema. </p>
                </div>
            </div>
            <section style="text-align: center;">
                <div class="container">
                    <form action="{{route('search')}}" method="get">
                    <div class="row d-flex justify-content-center" style="margin: 0px;">
                        <div class="col">
                            <input name="name" placeholder="Buscar por nombre" type="search" style="margin-left: 14px;" />
                            <input name="breed" placeholder="Buscar por raza" type="search" />
                            <input type="submit" style="margin-top: 14px;margin-bottom: 14px;" value="BUSCAR">
                    <input type="submit" style="margin-top: 14px;margin-bottom: 14px;" value="MOSTRAR TODOS">
                        </div>
                </form>
                </div>
            <div class="panel panel-success">               
                <div class="panel-body">
                      <table class='table table-bordered table-hover'>
                        <thead>
                          <tr>
                            <th>FOTO</th>
                            <th>NOMBRE</th>
                            <th>RAZA</th>
                            <th>FECHA DE NACIMIENTO</th>
                            <th>SEXO</th>
                            <th>PESO</th>
                            <th>ALTURA</th>
                            <th>PRUEBAS DE SALUD</th>
                            <th>PROPIETARIO</th>
                          </tr>
                        </thead>

                        <tbody>
                            @if(count($query)<=0)
                            <tr>
                                <td colspan="8">No hay resultados</td>
                            </tr>
                            @else
                            @foreach ($query as $dog)
                            <tr>
                                <td><img src="/assets/{{$dog->photo}}" width="150px"/></td>
                                <td>{{ $dog->name}}</td>
                                <td>{{ $dog->breed}}</td>
                                <td>{{ $dog->date_of_birth}}</td>
                                <td>{{ $dog->sex}}</td>
                                <td>{{ $dog->height.'cm'}}</td>
                                <td>{{ $dog->weight.'kg'}}</td>
                                <td>{{ $dog->health_tests}}</td>
                                <td>{{ $dog->owner}}</td>
                            </tr>
                            @endforeach
                            @endif
                            
                        </tbody>
                     

                            </table>

                </div>
                <span class="pagination justify-content-center">
                    {{$query->links()}}
                </span>
            </div>
            </section>
        </div>
    </section>
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro"></div>
        </div>
    </section>
</body>
    <footer class="bg-dark" style="color: white;text-align: center">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a class="link-light">Álvaro Ramas Franco</a></li>
                <li class="list-inline-item me-4"><a class="link-light">Desarrollador</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><svg class="bi bi-facebook text-light" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item me-4"><svg class="bi bi-twitter text-light" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg class="bi bi-instagram text-light" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
            <p>Copyright © DOG BREEDER 2022</p>
        </div>
    </footer>
</html>