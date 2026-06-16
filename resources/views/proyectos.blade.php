<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/webIcon.png') }}" type="image/x-icon">
    <title>Proyectos</title>

    @vite(['resources/css/navbar.css', 'resources/css/proyectos.css'])
</head>

<body>

    @include('navbar')

    <div class="col-10 col-lg-11">

        <img src="{{ asset('img/proyectos/programmer.webp') }}"  width="300px" alt="programer" class="d-block m-auto mt-5">
        <h1 class="ft-dangan text-center mb-5">Proyectos</h1>

        <div class="d-flex flex-wrap justify-content-center">
            <a href="https://github.com/Bac45234/ADECCA" target="_blank" class="proyect">
                <img src="{{ asset('img/proyectos/adecca.png') }}" alt="adecca">
                <div class="proyect-body">
                    <h5>ADECCA</h5>
                    Ecosistema para el control de tus productos.
                    <div class="d-flex flex-wrap">
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />
                            php
                        </span>
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" />
                            HTML
                        </span>
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" />
                            CSS
                        </span>
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                            JavaScript
                        </span>
                    </div>
                </div>
            </a>
            <div class="proyect">
                <img src="{{ asset('img/proyectos/adecca.png') }}" alt="adecca">
                <div class="proyect-body">
                    <h5>Votaciones</h5>
                    fffdsfdsf
                </div>
            </div>
            <div class="proyect">
                <img src="{{ asset('img/proyectos/adecca.png') }}" alt="adecca">
                <div class="proyect-body">
                    <h5>ADECCA</h5>
                    fffdsfdsf
                </div>
            </div>
            <div class="proyect">
                <img src="{{ asset('img/proyectos/adecca.png') }}" alt="adecca">
                <div class="proyect-body">
                    <h5>ADECCA</h5>
                    fffdsfdsf
                </div>
            </div>
        </div>

    </div>
    </div>


</body>

</html>