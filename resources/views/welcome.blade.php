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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
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

    <!-- Barra de navegacion lateral -->
    @include('navbar')

    <!-- Feed -->
    <div class="col-10 col-lg-11">
        <div class="row feed-style">

            <!-- Panel principal -->
            <div class="col-md-7 col-lg-8 col-xl-9 p-3">

                <!-- Foto & comentario -->
                <div class="my_image">
                    <img src="{{ asset('img/home/myself.webp') }}" alt="Me" class="rounded-circle" width="150">
                </div>

                <!-- Presentacion -->
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
                
                <!-- Skills -->
                <h3 class="panel-title">SKILLS</h3>
                <div class="panel-box p-3">

                    <!-- Lenguajes & HTML -->
                    <h5 class="skill-title mt-0">☕ Lenguajes & html</h5>
                    <div class="d-flex flex-wrap mb-2">
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />
                            php
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" />
                            HTML
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" />
                            CSS
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                            JavaScript
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" />
                            Java
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" />
                            Python
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/visualbasic/visualbasic-original.svg" />
                            Visual Basic
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/azuresqldatabase/azuresqldatabase-original.svg" />
                            SQL
                        </span>
                    </div>
                    <span class="last-update">Last update 14/06/2026</span>
                    <hr class="mt-0">

                    <!-- Frameworks & Libraries -->
                    <h5 class="skill-title">📚 Frameworks & Libraries</h5>
                    <div class="d-flex flex-wrap mb-2">
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" />
                            Laravel
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg" />
                            Bootstrap
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/datatables/datatables-original.svg" />
                            DataTables
                        </span>
                        <span class="tech-skill">
                            <i class="fa-brands fa-github text-black"></i>
                            Bramus/router
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jquery/jquery-original.svg" />
                            jQuery
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/chartjs/chartjs-original.svg" />
                            Chart.js
                        </span>
                        <span class="tech-skill">
                            <i class="fa-solid fa-font-awesome text-primary-emphasis"></i>
                            Font Awasome
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/swiper/swiper-original.svg" />
                            Swiper
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/spring/spring-original.svg" />
                            Spring Boot
                        </span>
                    </div>
                    <span class="last-update">Last update 14/06/2026</span>
                    <hr class="mt-0">

                    <!-- Tools -->
                    <h5 class="skill-title">🛠️ Tools & IDE</h5>
                    <div class="d-flex flex-wrap mb-2">
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" />
                            Visual Studio Code
                        </span>
                        <span class="tech-skill">
                            <i class="fa-brands fa-git-alt text-warning"></i>
                            Git
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original.svg" />
                            Node
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/npm/npm-original.svg" />
                            npm
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/netbeans/netbeans-original.svg" />
                            NetBeans
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/androidstudio/androidstudio-original.svg" />
                            Android Studio
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/visualstudio/visualstudio-original.svg" />
                            Visual Studio
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postman/postman-original.svg" />
                            Postman
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/composer/composer-original.svg" />
                            Composer
                        </span>
                    </div>
                    <span class="last-update">Last update 14/06/2026</span>
                    <hr class="mt-0">

                    <!-- Clouds & Providers -->
                    <h5 class="skill-title">☁️ Clouds & Providers</h5>
                    <div class="d-flex flex-wrap mb-2">
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original.svg" />
                            Postgresql
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg" />
                            MongoDB
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/microsoftsqlserver/microsoftsqlserver-original.svg" />
                            Microsoft SQL Server
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" />
                            MySQL
                        </span>
                        <span class="tech-skill">
                            <i class="fa-brands fa-github"></i>
                            GitHub
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/railway/railway-original.svg" />
                            Railway
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vercel/vercel-original.svg" />
                            Vercel
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/netlify/netlify-original.svg" />
                            Netlify
                        </span>
                    </div>
                    <span class="last-update">Last update 14/06/2026</span>
                    <hr class="mt-0">

                    <!-- Hardware -->
                    <h5 class="skill-title">💡 Hardware</h5>
                    <div class="d-flex flex-wrap mb-2">
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/arduino/arduino-original.svg" />
                            Arduino
                        </span>
                    </div>
                    <span class="last-update">Last update 14/06/2026</span>
                    <hr class="mt-0">

                    <!-- Operation Systems -->
                    <h5 class="skill-title">🪟 Operation Systems</h5>
                    <div class="d-flex flex-wrap mb-2">
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/windows11/windows11-original.svg" />
                            Windows
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/kalilinux/kalilinux-original.svg" />
                            Kali Linux
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/ubuntu/ubuntu-original.svg" />
                            Ubuntu
                        </span>
                        <span class="tech-skill">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linuxmint/linuxmint-original.svg" />
                            Linux Mint
                        </span>
                    </div>
                    <span class="last-update">Last update 14/06/2026</span>
                </div>

                <!-- Extras -->
                <h3 class="panel-title">EXTRAS</h3>
                <div class="panel-box p-3">


                    <!-- Slider main container -->
                    <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                    </div>


                </div>
            </div>

            <!-- Panel secundario -->
            <div class="col-md-5 col-lg-4 col-xl-3 p-3">

                <!-- About Me -->
                <div class="panel-box">
                    <h5 class="panel-encabezado rounded-top-3">🌊 About Me</h5>
                    <img src="{{ asset('/img/home/AboutMe.webp') }}" alt="AboutMe" width="100%">
                    <ul class="p-2 m-0">
                        <li class="data-item">
                            <span>Edad</span>
                            <span>20</span>
                        </li>
                        <li class="data-item">
                            <span>Country</span>
                            <span>Guatemala</span>
                        </li>
                        <li class="data-item">
                            <span>Pronombres</span>
                            <span>we/ve/tio/po/pe/dou/che</span>
                        </li>
                        <li class="data-item border-0">
                            <span>Personalidad</span>
                            <span>Introvertido</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact & Social -->
                <div class="panel-box">
                    <h5 class="panel-encabezado rounded-top-3">☎️ Contact & Social</h5>
                    <img src="{{ asset('/img/home/Contact.webp') }}" alt="Contact" width="100%">
                    <div class="p-2">
                        <a href="mailto:javierbac010@gmail.com" target="_blank" class="data-item">
                            <span>
                                <i class="fa-solid fa-envelope text-success"></i>
                                Gmail
                            </span>
                            <span> javierbac010@gmail.com </span>
                        </a>
                        <a href="https://github.com/Bac45234" target="_blank" class="data-item">
                            <span>
                                <i class="fa-brands fa-github"></i>
                                GitHub
                            </span>
                            <span> Bac45234 </span>
                        </a>
                        <a href="https://x.com/Khafiiiir" target="_blank" class="data-item">
                            <span>
                                <i class="fa-brands fa-twitter text-primary"></i>
                                Twiiter
                            </span>
                            <span> Khafiiiir </span>
                        </a>
                        <a class="data-item">
                            <span>
                                <i class="fa-brands fa-discord"></i>
                                Discord
                            </span>
                            <span> khafiir </span>
                        </a>
                        <a href="https://www.instagram.com/khafiir_/" target="_blank" class="data-item">
                            <span>
                                <i class="fa-brands fa-instagram text-warning"></i>
                                Instagram
                            </span>
                            <span> khafiir_ </span>
                        </a>
                        <a href="https://steamcommunity.com/profiles/76561199017480380/" target="_blank"
                            class="data-item border-0">
                            <span>
                                <i class="fa-brands fa-steam text-primary"></i>
                                Steam
                            </span>
                            <span> Khafiir </span>
                        </a>
                    </div>
                </div>

                <!-- Artistas & Generos -->
                <div class="panel-box">
                    <h5 class="panel-encabezado rounded-top-3">🎵 Artistas & Generos</h5>
                    <img src="{{ asset('img/home/Music.webp') }}" alt="Music" width="100%">
                    <div class="p-2 d-flex flex-wrap justify-content-center">
                        <span class="recreative-span">Green Day</span>
                        <span class="recreative-span">Daft Punk</span>
                        <span class="recreative-span">EuroBeat</span>
                        <span class="recreative-span">Rock</span>
                        <span class="recreative-span">City Pop</span>
                        <span class="recreative-span">Jazz</span>
                        <span class="recreative-span">Orquestas</span>
                        <span class="recreative-span">Kessoku Band</span>
                        <span class="recreative-span">La Sonora Dinamita</span>
                        <span class="recreative-span">Show By Rock</span>
                        <span class="recreative-span">Keane</span>
                        <span class="recreative-span">Initial D</span>
                        <span class="recreative-span">Hatsune Miku</span>
                        <span class="recreative-span">Toby Fox</span>
                        <span class="recreative-span">Masafumi Takada</span>
                        <span class="recreative-span">Abba</span>
                        <span class="recreative-span">Gorillaz</span>
                        <span class="recreative-span">Red Hot Chili Pepers</span>
                        <span class="recreative-span">A Day To Remember</span>
                        <span class="recreative-span">Rebecca Sugar</span>
                        <span class="recreative-span">Laura Shigihara</span>
                        <span class="recreative-span">Radiohead</span>
                        <span class="recreative-span">The Marias</span>
                        <span class="recreative-span">El Cuarteto De Nos</span>
                        <span class="recreative-span">Frank Sinatra</span>
                    </div>
                </div>

                <!-- Games -->
                <div class="panel-box">
                    <h5 class="panel-encabezado rounded-top-3">🎮 Games</h5>
                    <img src="{{ asset('img/home/Games.webp') }}" alt="Games" width="100%">
                    <div class="p-2 d-flex flex-wrap justify-content-center">
                        <span class="recreative-span">Deltarune</span>
                        <span class="recreative-span">Undertale</span>
                        <span class="recreative-span">Danganronpa</span>
                        <span class="recreative-span">OMORI</span>
                        <span class="recreative-span">Deadpool</span>
                        <span class="recreative-span">Mario Galaxy 2</span>
                        <span class="recreative-span">Donkey Kong Country Returns</span>
                        <span class="recreative-span">Hollow Knight</span>
                        <span class="recreative-span">Outcore</span>
                        <span class="recreative-span">Doki Doki</span>
                        <span class="recreative-span">Cuphead</span>
                        <span class="recreative-span">Plantas vs Zombies</span>
                        <span class="recreative-span">Portal</span>
                        <span class="recreative-span">Bendy and the Ink Machine</span>
                        <span class="recreative-span">Slime Rancher</span>
                        <span class="recreative-span">Five Nights at Freddy's</span>
                        <span class="recreative-span">Wuthering Waves</span>
                        <span class="recreative-span">Minecraft</span>
                        <span class="recreative-span">Fortnite</span>
                        <span class="recreative-span">Roblox</span>
                        <span class="recreative-span">Left 4 Dead</span>
                    </div>
                </div>

                <!-- Entretenimiento -->
                <div class="panel-box">
                    <h5 class="panel-encabezado rounded-top-3">🎬 Entretenimiento</h5>
                    <img src="{{ asset('img/home/Entretenimiento.webp') }}" alt="Entretenimiento" width="100%">
                    <div class="p-2 d-flex flex-wrap justify-content-center">
                        <span class="recreative-span">El Camino</span>
                        <span class="recreative-span">Breaking Bad</span>
                        <span class="recreative-span">Interstella 5555</span>
                        <span class="recreative-span">Ready Player One</span>
                        <span class="recreative-span">Arcane</span>
                        <span class="recreative-span">Scarface</span>
                        <span class="recreative-span">Baby Driver</span>
                        <span class="recreative-span">Driver [I drive (Lit yo)]</span>
                        <span class="recreative-span">The Last Of Us</span>
                        <span class="recreative-span">Transformers ONE</span>
                        <span class="recreative-span">Jujutsu Kaisen</span>
                        <span class="recreative-span">Kung Fu Panda 2</span>
                        <span class="recreative-span">La gran aventura Lego</span>
                        <span class="recreative-span">Lego Batman</span>
                        <span class="recreative-span">Isla Siniestra</span>
                        <span class="recreative-span">Scott Pilgrim</span>
                        <span class="recreative-span">Bocchi The Rock</span>
                        <span class="recreative-span">Spider Man Into The Spiderverse</span>
                        <span class="recreative-span">El gato con botas</span>
                        <span class="recreative-span">Ratatuille</span>
                        <span class="recreative-span">Klaus</span>
                        <span class="recreative-span">Licoris Recoild</span>
                        <span class="recreative-span">Blue Valentine</span>
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