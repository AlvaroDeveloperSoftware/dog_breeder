<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

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
                                                <a class="nav-link active" href="#">INICIO</a>
                                            </li>
                                        </ul>
                                        <a class="nav-link" href="#"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">BUSQUEDA DE EJEMPLARES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">USUARIOS</a>
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
                            <button class="btn btn-light me-2" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                    <div class="d-none d-md-block"></div>
                </div>
            </nav>
            <section>
                <div class="slide">
                    <div class="slide-inner">
                        <input class="slide-open" type="radio" id="slide-1" 
                              name="slide" aria-hidden="true" hidden="" checked="checked">
                        <div class="slide-item">
                            <img src="/assets/concurso.jpg" style="display: block;margin: auto;">
                        </div>
                        <input class="slide-open" type="radio" id="slide-2" 
                              name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <img src="/assets/mejorGrupo.jpg" style="display: block;margin: auto;">
                        </div>
                        <input class="slide-open" type="radio" id="slide-3" 
                              name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <img src="assets/mejorgrupo1.jpg" style="display: block;margin: auto;">
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
                <div class="container h-100 position-relative" style="top: 200px;">
                    <div class="row gy-5 gy-lg-0 row-cols-1 row-cols-md-2 row-cols-lg-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body pt-5 p-4">
                                    <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon lg" style="top: -30px;">
                        </div>
                        <h4 class="card-title">Configuración</h4>
                        <p class="card-text">Personaliza tus datos introducidos.</p>
                        </div>
                        <div class="card-footer p-4 py-3">
                            <a href="#">Ir a Configuración</a>
                    </div>
                </div>
            </div>
        <div class="col">
        <div class="card">
        <div class="card-body pt-5 p-4">
            <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon lg" style="top: -30px;">
  
</div>
<h4 class="card-title">Mi Criadero</h4>
<p class="card-text">Crea y modifica los ejemplares pertenecientes a tu criadero.</p>
</div>
<div class="card-footer p-4 py-3"><a href="#">Ir a Mi Criadero</a>
</div>
</div>
</div>
<div class="col">
    <div class="card">
        <div class="card-body pt-5 p-4">
            <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon lg" style="top: -30px;">
</div>
<h4 class="card-title">Búsqueda de ejemplares</h4>
<h6 class="text-muted card-subtitle mb-2"></h6>
<p class="card-text">Busca los ejemplares de los demás criadores.</p>
</div>
<div class="card-footer p-4 py-3"><a href="#">Ir Buscar ejemplares</a>
</div>
</div>
</div>
</div>
</div>
</section>
<a href="{{ url('breeder/logout') }}" class="btn btn-primary" type="button" style="margin-top: 283px;margin-left: 14px;color: rgb(0,0,0);background: #7b5757;margin-bottom: -64px;">CERRAR SESIÓN</a>
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            </div>
        </div>
    </section>
    <footer class="text-center footer text-faded py-5">
        <div class="container">
            <p class="m-0 small">Copyright&nbsp;©&nbsp;DOG BREEDER 2022</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><script src="assets/js/script.min.js?h=2b73f98f110c7c604b36df54dc174798"></script>
</body>
</html>