<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cultura</title>

    <link rel="icon" href="{{ url('assets/logoDogBreeder.PNG') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
                                                <a class="nav-link" href="#">CONFIGURACION</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('farm.view')}}">MI CRIADERO</a>
                                            </li>
                                        </ul>
                                        <a class="nav-link" href="#"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('search')}}">BUSQUEDA DE EJEMPLARES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">CULTURA</a>
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
                            <button class="btn btn-light me-2" type="button">INICIO</button>
                            <button class="btn btn-primary" type="button">CONFIGURACION</button>
                            <button class="btn btn-light me-2" type="button">MI CRIADERO</button>
                            <button class="btn btn-primary" type="button">BUSQUEDA DE EJEMPLARES</button>
                            <button class="btn btn-light me-2" type="button">CULTURA</button>
                            <button class="btn btn-primary" type="button">EXPOSICIONES</button>
                        </div>
                    </div>
                    <div class="d-none d-md-block"></div>
                </div>
            </nav>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h1>¡ APRENDE CON NOSOTROS !</h1>
                <p class="w-lg-50">En esta sección aprenderás y tendrás acceso a las organizaciones o clubs más representativos de las razas caninas que forman la canofilia</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-2 row-cols-md-2 bg-white" style="border: 5px solid black; border-radius: 20px">
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;text-align: center;" src="/assets/organization/fci.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4" style="width: 635.712px;">
                        <h4>¿Qué es la FCI?</h4>
                        <p style="text-align: justify;">La Federación Cinológica Internacional es la federación internacional de Kennel Clubes más grande del mundo. Se encarga de regir y fomentar la cinología, así como las normas de cría de perros. Consta de 95 países miembros con sus propios pedigrís que forman a sus jueces.                                Fundación 22 de mayo de 1911<br /><br /></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/assets/organization/pedigree.jpg" /></div>
                    <div class="py-4 py-lg-0 px-lg-4" style="width: 635.712px;">
                        <h4>¿Qué es un Pedigree?</h4>
                        <p>El <strong>pedigree</strong> es un documento oficial que certifica la descendencia, y por ende, la pureza de la raza de un <strong>perro</strong>. Para poder tener este documento se debe poseer un mínimo de tres generaciones de antepasados que pertenezcan a la raza y que estén previamente registrados.<br /><br /></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/assets/organization/exposiciones.jpg" /></div>
                    <div class="py-4 py-lg-0 px-lg-4" style="width: 635.712px;">
                        <h4>¿Para que sirven las exposiciones?</h4>
                        <p>Son eventos en los que se valora que ejemplares de los presentados se parecen más al prototipo ideal que marca el estándar de su raza. El objetivo de las exposiciones es dar ganador a perros que representen a la raza y puedan mejorar la raza.<br /><br /></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/assets/organization/estandar.jpg" /></div>
                    <div class="py-4 py-lg-0 px-lg-4" style="width: 635.712px;">
                        <h4>¿Qué es un estándar?</h4>
                        <p>El <strong>estándar</strong> es la descripción detallada del aspecto morfológico de los <strong>perros</strong> de una determinada raza, que sirve de criterio para la valoración objetiva del aspecto de un <strong>perro</strong> determinado (y hasta cierto punto, del carácter).<br /><br /></p>
                    </div>
                </div>
            </div>
        </div>
        <section class="photo-gallery py-4 py-xl-5 ">
            <div class="container-fluid p-0 ">
                <div class="row g-0 mb-5 bg-white" style="border: 5px solid black;border-radius: 20px">
                    <div class="col"><img src="/assets/organization/españa.webp" width="150" style="margin: 12px;" /></div>
                    <div class="col-md-8 col-xl-6 text-center my-auto" style="width: 872px;">
                        <h1 class="text-center" style="align-items: center">CLUBES DE RAZA DE ESPAÑA</h1>
                        <p class="w-lg-50"></p>
                    </div>
                    <div class="col"><img src="/assets/organization/españa.webp" style="margin-top: 12px;margin-left: 44px" width="150" /></div>
                </div>
                <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                    <div class="col item"  style="margin-bottom: 5px"><a href="http://www.ancae.es"><img class="img-fluid" src="/assets/clubs/alano.png" /></a></div>
                    <div class="col item" style="margin-bottom: 5px"><a href="https://www.ceast.es"><img class="img-fluid" src="/assets/clubs/american.png" /></a></div>
                    <div class="col item" style="margin-bottom: 5px"><a href="www.bassethoundclub.es/"><img class="img-fluid" src="/assets/clubs/bassetHound.png" /></a></div>
                    <div class="col item" style="margin-bottom: 5px"><a href="http://www.clubbeagle.com/"><img class="img-fluid" src="/assets/clubs/beagle.png" /></a></div>
                    <div class="col item" style="margin-bottom: 5px"><a href="http://www.ratonerobodeguero.org/"><img class="img-fluid" src="/assets/clubs/bodeguero.png" /></a></div>
                </div>
            </div>
            <br>
            <section class="photo-gallery py-4 py-xl-5">
                <div class="container-fluid p-0">
                    <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                        <div class="col item" style="margin-bottom: 5px"><a href="http://www.clubdelbostonterrier.es/"><img class="img-fluid" src="/assets/clubs/boston.png" /></a></div>
                        <div class="col item" style="margin-bottom: 5px;"><a href="http://www.bouvierdeflandes.net/"><img class="img-fluid imagenes" src="/assets/clubs/bouvier.png" /></a></div>
                        <div class="col item" style="margin-bottom: 5px"><a href="http://www.boxerclub.es/"><img class="img-fluid" src="/assets/clubs/boxer.png" /></a></div>
                        <div class="col item" style="margin-bottom: 5px"><a href="http://www.clubbracoaleman.es/"><img class="img-fluid" src="/assets/clubs/bracoAleman.png" /></a></div>
                        <div class="col item" style="margin-bottom: 5px"><a href="http://www.aebw.org/"><img class="img-fluid" src="/assets/clubs/bracoWeimar.png" /></a></div>
                        <div class="col item" style="margin-bottom: 5px"><a href="http://www.clubesp-epbreton.es/"><img class="img-fluid" src="/assets/clubs/Breton.png" /></a></div>
                    </div>
                </div>
                <section class="photo-gallery py-4 py-xl-5">
                    <div class="container-fluid p-0">
                        <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                            <div class="col item"><a href="https://www.aefrbf.es"><img class="img-fluid" src="/assets/clubs/BullDogFrances.png" /></a></div>
                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/bulldogIngles.png" /></a></div>
                            <div class="col item"><a href="https://www.cbte.es"><img class="img-fluid" src="/assets/clubs/bullTerrier.png" /></a></div>
                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/canecorso.png" /></a></div>
                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/carlino.png" /></a></div>
                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/collie.png" /></a></div>
                        </div>
                    </div>
                    <section class="photo-gallery py-4 py-xl-5">
                        <div class="container-fluid p-0">
                            <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/dogoAleman.png" /></a></div>
                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img style="margin-bottom: 30px;" class="img-fluid" src="/assets/clubs/DogoMallorquin.jpg" /></a></div>
                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/drahthaar.png" /></a></div>
                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/galgo.png" /></a></div>
                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid imagenes" src="/assets/clubs/galgoExtranjero.jpg" /></a></div>
                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/jagdterrier.png" /></a></div>
                            </div>
                        </div>
                        <section class="photo-gallery py-4 py-xl-5">
                            <div class="container-fluid p-0">
                                <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/labrador.png" /></a></div>
                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/leonBerger.png" /></a></div>
                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img style="margin-bottom: 30px" class="img-fluid" src="/assets/clubs/mastinEspañol.png" /></a></div>
                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/mastinPirineo.png" /></a></div>
                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/molososArena.png" /></a></div>
                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pastorAleman.png" /></a></div>
                                </div>
                            </div>
                            <section class="photo-gallery py-4 py-xl-5">
                                <div class="container-fluid p-0">
                                    <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pastorBelga.png" /></a></div>
                                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pastorCatalan.png" /></a></div>
                                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pastorGarafiano.png" /></a></div>
                                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pastorMallorquin.png" /></a></div>
                                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pastorVasco.png" /></a></div>
                                        <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/PerdigueroBurgos.png" /></a></div>
                                    </div>
                                </div>
                                <section class="photo-gallery py-4 py-xl-5">
                                    <div class="container-fluid p-0">
                                        <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img style="margin-bottom: 30px" class="img-fluid" src="/assets/clubs/perroAgua.png" /></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/perroNordicos.png" /></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pinscher.png" /></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/podencoCanario.png" /></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/podencoIbicenco.jpg" /></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/pointer.png" /></a></div>
                                        </div>
                                    </div>
                                    <section class="photo-gallery py-4 py-xl-5">
                                        <div class="container-fluid p-0">
                                            <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img style="margin-bottom: 30px" class="img-fluid" src="/assets/clubs/presaCanario.png" /></a></div>
                                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/ratoneroValenciano.png" /></a></div>
                                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/retrievers.png" /></a></div>
                                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/rottweiller.png" /></a></div>
                                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/sabuesoEspañol.png" /></a></div>
                                                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/sanBernardo.png" /></a></div>
                                            </div>
                                        </div>
                                        <section class="photo-gallery py-4 py-xl-5">
                                            <div class="container-fluid p-0">
                                                <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/setter.png" /></a></div>
                                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/spaniel.png" /></a></div>
                                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/staffy.png" /></a></div>
                                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/teckel.png" /></a></div>
                                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/terranova.png" /></a></div>
                                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/terriers.png" /></a></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="photo-gallery py-4 py-xl-5">
                                            <div class="container-fluid p-0">
                                                <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                                                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="/assets/clubs/yorkshire.png" /></a></div>
                                                </div>
                                            </div>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </div>
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
</html>