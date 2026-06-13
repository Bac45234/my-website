<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/img/webIcon.png') }}" type="image/x-icon">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/abc15644b5.js" crossorigin="anonymous"></script>

</head>
<style>
    body {
        background-image: url("{{ asset('/img/backGround.webp') }}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: white;
    }
</style>

<body>

    @include('navbar')

    <div class="col-10 col-lg-11">
        <div class="row feed-style">
            <div class="col-md-7 col-lg-8 col-xl-9 p-3">
                <div class="my_image">
                    <img src="{{ asset('img/home/myself.webp') }}" alt="Me" class="rounded-circle" width="150">
                </div>
                <div class="panel-box p-3">
                    <h2 class="mt-5 ft-dangan">Javier Eduardo Juchuña Bac</h2>
                    <p>
                        Soy estudiante de primer ciclo de la carrera de Ingeniería en Ciencias de la Computación y
                        Tecnologías de la Información en la Universidad del Valle de Guatemala. Me enfoco
                        principalmente en el desarrollo web full stack, aunque también trabajo con aplicaciones de
                        escritorio, aplicaciones móviles, programación de microcontroladores y armado de circuitos
                        electrónicos.
                        <br><br>
                        Me considero una persona autodidacta, perseverante y orientada al aprendizaje continuo.
                        Siempre estoy mejorando tanto profesional como personalmente, impulsado por un genuino
                        interés y amor por la informática (más específicamente la programación). Mi objetivo es
                        especializarme en el área de la
                        ciberseguridad y desarrollar una sólida trayectoria académica y profesional, que incluya la
                        obtención de una maestría y un doctorado en este campo.
                    </p>
                    <hr>
                    <p class="m-0">
                        Por otro lado. Formo parte del Club de Debate de mi universidad y he participado en torneos
                        como TUDOR, Jaguarcitos Express y la Copa Jaguar (Torneo Nacional de Debate). Además,
                        practico ajedrez y actualmente tengo una puntuación de 322 en la modalidad de rápidas (sí,
                        eso era totalmente importante de mencionar <img src="{{ asset('/img/home/ta.webp') }}" alt="ta"
                            width="25"> ).
                        En mi tiempo libre también me gusta escuchar música mientras hago otras cosas, ver videos o
                        streams, doomscrolleando en redes o ver de series y películas.
                        <br><br>
                        pd: Trabajo chido de veritas, ándenle, denme chamba <img src="{{ asset('/img/home/SAJ.webp') }}"
                            alt="ta" width="25"> .
                        <br><br><br>
                        <img src="{{ asset('/img/home/MyInspiration.webp') }}" alt="MyInspiration" width="100%">
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3 p-3">
                <div class="panel-box">
                    <h5 class="panel-encabezado rounded-top-3">🌊 About Me</h5>
                    <img src="{{ asset('/img/home/AboutMe.webp') }}" alt="AboutMe" width="100%">
                    <ul class="p-2 m-0">
                        <li class="social-item">
                            <span>Edad</span>
                            <span>20</span>
                        </li>
                        <li class="social-item">
                            <span>Country</span>
                            <span>Guatemala</span>
                        </li>
                        <li class="social-item">
                            <span>Pronombres</span>
                            <span>we/ve/tio/po/pe/dou/che</span>
                        </li>
                        <li class="social-item border-0">
                            <span>Personalidad</span>
                            <span>Introvertido</span>
                        </li>
                    </ul>
                </div>
                <div class="panel-box">
                    <h5 class="panel-encabezado rounded-top-3">☎️ Contact & Social</h5>
                    <img src="{{ asset('/img/home/Contact.webp') }}" alt="Contact" width="100%">
                    <div class="p-2">
                        <a href="mailto:javierbac010@gmail.com" target="_blank" class="social-item">
                            <span>
                                <i class="fa-solid fa-envelope text-success"></i>
                                Gmail
                            </span>
                            <span> javierbac010@gmail.com </span>
                        </a>
                        <a href="https://github.com/Bac45234" target="_blank" class="social-item">
                            <span>
                                <i class="fa-brands fa-github"></i>
                                GitHub
                            </span>
                            <span> Bac45234 </span>
                        </a>
                        <a href="https://x.com/Khafiiiir" target="_blank" class="social-item">
                            <span>
                                <i class="fa-brands fa-twitter text-primary"></i>
                                Twiiter
                            </span>
                            <span> Khafiiiir </span>
                        </a>
                        <a class="social-item">
                            <span>
                                <i class="fa-brands fa-discord"></i>
                                Discord
                            </span>
                            <span> khafiir </span>
                        </a>
                        <a href="https://www.instagram.com/khafiir_/" target="_blank" class="social-item">
                            <span>
                                <i class="fa-brands fa-instagram text-warning"></i>
                                Instagram
                            </span>
                            <span> khafiir_ </span>
                        </a>
                        <a href="https://steamcommunity.com/profiles/76561199017480380/" target="_blank"
                            class="social-item border-0">
                            <span>
                                <i class="fa-brands fa-steam text-primary"></i>
                                Steam
                            </span>
                            <span> Khafiir </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>