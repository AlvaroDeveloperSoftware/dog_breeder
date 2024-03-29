<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mi Criadero</title>

    <link rel="icon" href="{{ url('assets/logoDogBreeder.PNG') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .slide {
            position: relative;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
            margin-top: 26px;
        }

        .slide-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: calc( 700px + 3em);
        }

        .slide-open:checked + .slide-item {
            position: static;
            opacity: 100;
        }

        .slide-item {
            position: absolute;
            opacity: 0;
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        .slide-item img {
            display: block;
            height: auto;
            max-width: 100%;
        }

        .slide-control {
            background: rgba(0, 0, 0, 0.28);
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            display: none;
            font-size: 40px;
            height: 40px;
            line-height: 35px;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            cursor: pointer;
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            text-align: center;
            width: 40px;
            z-index: 10;
        }

        .slide-control.prev {
            left: 2%;
        }

        .slide-control.next {
            right: 2%;
        }

        .slide-control:hover {
            background: rgba(0, 0, 0, 0.8);
            color: #aaaaaa;
        }

        #slide-1:checked ~ .control-1,
        #slide-2:checked ~ .control-2,
        #slide-3:checked ~ .control-3 {
            display: block;
        }

        .slide-indicador {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        .slide-indicador li {
            display: inline-block;
            margin: 0 5px;
        }

        .slide-circulo {
            color: #828282;
            cursor: pointer;
            display: block;
            font-size: 35px;
        }

        .slide-circulo:hover {
            color: #aaaaaa;
        }

        #slide-1:checked ~ .control-1 ~ .slide-indicador 
             li:nth-child(1) .slide-circulo,
        #slide-2:checked ~ .control-2 ~ .slide-indicador 
              li:nth-child(2) .slide-circulo,
        #slide-3:checked ~ .control-3 ~ .slide-indicador 
              li:nth-child(3) .slide-circulo {
            color: #428bca;
        }

        #titulo {
            width: 100%;
            position: absolute;
            padding: 0px;
            margin: 0px auto;
            text-align: center;
            font-size: 27px;
            color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            z-index: 9999;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
                 -1px 0px 2px rgba(255, 255, 255, 0);
        }
    </style>
</head>
        <body style="background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65));">
            <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
                <div class="container">
                    <nav class="navbar navbar-light navbar-expand-md">
                        <img src="/assets/logoDogBreeder.png" style="width: 150px; height:100px;margin-right: 50px"/>
                        <div class="container-fluid">
                            <button data-bs-toggle="collapse" data-bs-target="#navcol-6" class="navbar-toggler">
                                <span class="visually-hidden">Menú</span><span class="navbar-toggler-icon"></span>
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
                                                <a class="nav-link active">MI CRIADERO</a>
                                            </li>
                                        </ul>
                                        <a class="nav-link" href="#"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('search')}}">BUSQUEDA DE EJEMPLARES</a>
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
                        <div class="d-md-none my-6">
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
            <section>
                <div class="slide" style="margin-top: auto">
                    <div class="slide-inner">
                        <input class="slide-open" type="radio" id="slide-1" 
                              name="slide" aria-hidden="true" hidden="" checked="checked">
                            <div class="slide-item">
                                <img src="/assets/belleza.jpeg" style="display: block;margin: auto;position: relative;bottom: 150px">
                            </div>
                            <input class="slide-open" type="radio" id="slide-2" 
                                  name="slide" aria-hidden="true" hidden="">
                            <div class="slide-item">
                                <img src="/assets/concurso.jpg" width="100%" style="display: block;margin: auto;">
                            </div>
                            <input class="slide-open" type="radio" id="slide-3" 
                                  name="slide" aria-hidden="true" hidden="">
                            <div class="slide-item">
                                <img src="/assets/mejorgrupo1.jpg" width="100%" style="display: block;margin: auto;">
                            </div>
                        <label for="slide-3" class="slide-control prev control-1">‹</label>
                        <label for="slide-2" class="slide-control next control-1">›</label>
                        <label for="slide-1" class="slide-control prev control-2">‹</label>
                        <label for="slide-3" class="slide-control next control-2">›</label>
                        <label for="slide-2" class="slide-control prev control-3">‹</label>
                        <label for="slide-1" class="slide-control next control-3">›</label>
                        <ol class="slide-indicador">
                            <li>
                                <label for="slide-1" class="slide-circulo">•</label>
                            </li>
                            <li>
                                <label for="slide-2" class="slide-circulo">•</label>
                            </li>
                            <li>
                                <label for="slide-3" class="slide-circulo">•</label>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
            <section class="background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65));">
                <div class="simple-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="container py-4 py-xl-5" style="color: black">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h2>¿QUÉ DESEA HACER?</h2>
                            <p class="w-lg-50">Un criador necesita dos funciones principales, tener sus ejemplares almacenados de forma centralizada y poder modificar los ejemplares que crea.</p>
                        </div>
                    </div>
                    <div class="row gy-4 row-cols-1 row-cols-md-1 row-cols-xl-2" style="justify-content: center;">
                        <div class="col">
                            <div>
                                <div class="py-4">
                                    <a href="{{route('createdog.view')}}"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 400px" src="../assets/Añadirejemplar.PNG" /></a>
                                        <p class="text-center" style="font-size: 30px">Añade a tu criadero nuevos ejemplares</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="py-4">
                                    <a href="{{route('modify.view')}}"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 400px" src="../assets/Modificarejemplar.png" /></a>
                                    <p class="text-center" style="font-size: 30px">Modifica los ejemplares que tengas almacenados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
        </body>
        <footer class="text-center bg-dark" style="color: white">
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
<html>