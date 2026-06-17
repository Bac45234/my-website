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

        <!-- Banner -->
        <img src="{{ asset('img/proyectos/programmer.webp') }}"  width="300px" alt="programer" class="d-block m-auto mt-5">
        <h1 class="ft-dangan text-center mb-5">Proyectos</h1>

        <!-- Projects -->
        <div class="d-flex flex-wrap justify-content-center">
            <a href="https://github.com/Bac45234/ADECCA" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/adecca.webp') }}" alt="adecca">
                <div class="project-body">
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
            <a href="https://github.com/Bac45234/WorkHub" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/workhub.webp') }}" alt="workhub">
                <div class="project-body">
                    <h5>WorkHub</h5>
                    Centro de publicación y postulacion de vacantes laborales.
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
            <a href="https://github.com/Bac45234/Sistema-de-Gestion-de-Biblioteca" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/biblioteca.webp') }}" alt="biblioteca">
                <div class="project-body">
                    <h5>Gestión de biblioteca</h5>
                    Maneja la información y registro de tis libros, usuarios y préstamos.
                    <div class="d-flex flex-wrap">
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" />
                            Java
                        </span>
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/spring/spring-original.svg" />
                            Spring Boot
                        </span>
                    </div>
                </div>
            </a>
            <a href="https://github.com/Bac45234/Proyecto_Integrador" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/integrador.webp') }}" alt="integrador">
                <div class="project-body">
                    <h5>API REST</h5>
                    Integración de Spring Boot para un CRUD de usuarios.
                    <div class="d-flex flex-wrap">
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" />
                            Java
                        </span>
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/spring/spring-original.svg" />
                            Spring Boot
                        </span>
                    </div>
                </div>
            </a>
            <a href="https://github.com/Bac45234/Votaciones-escolares" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/votaciones.webp') }}" alt="votaciones">
                <div class="project-body">
                    <h5>Elecciones estudiantiles</h5>
                    Sistema de votación y metricas de partidos electorales.
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
            <a href="https://github.com/Bac45234/IA-Showii" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/iashowii.webp') }}" alt="iashowii">
                <div class="project-body">
                    <h5>IA Showii</h5>
                    Primer proyecto final de carrera.
                    <div class="d-flex flex-wrap">
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" />
                            Java
                        </span>
                    </div>
                </div>
            </a>
            <a href="https://github.com/Bac45234/Promedio-ponderado" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/promedio_ponderado.webp') }}" alt="promedio-ponderado">
                <div class="project-body">
                    <h5>Promedio ponderado</h5>
                    Crea partidas contables de promedio ponderado.
                    <div class="d-flex flex-wrap">
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" />
                            Java
                        </span>
                    </div>
                </div>
            </a>
            <a href="https://github.com/Bac45234/Inventario" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/inventario.webp') }}" alt="inventario">
                <div class="project-body">
                    <h5>Inventario</h5>
                    CRUD de productos.
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
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                            JavaScript
                        </span>
                    </div>
                </div>
            </a>
            <a href="https://github.com/Bac45234/Gestor-de-contrase-as" target="_blank" class="project">
                <img src="{{ asset('img/proyectos/banners/keypass.webp') }}" alt="keypass">
                <div class="project-body">
                    <h5>KeyPass Imitation</h5>
                    Guarda y encrypta tus contraseñas.
                    <div class="d-flex flex-wrap">
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" />
                            HTML
                        </span>
                        <span class="tech">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                            JavaScript
                        </span>
                    </div>
                </div>
            </a>
        </div>

    </div>
    </div>


</body>

</html>