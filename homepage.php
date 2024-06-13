<?php

include("config/net.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floppa Cafe</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Libreria AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Iconos Flaticon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
</head>

<!-- Paleta de Colores (Color Beige/Trigo) -->
<!-- #553d3a	(85,61,58)
          #98694d	(152,105,77)
          #c09061	(192,144,97)
          #e8c48e	(232,196,142)
          #e9dbc6	(233,219,198) -->

<body>
    <nav data-aos="fade-down" class="bg-black bg-opacity-0 fixed top-0 left-0 w-full z-10" id="navbarHomepage">
        <ul
            class="text-zinc-50 text-lg mx-auto flex flex-col md:flex-row items-center justify-between px-[8rem] gap-5 md:gap-5 py-1">

            <li class="flex flex-row items-center font-bold text-2xl"><img src="assets/img/logoSinFondo.png"
                    alt="loguito" class="w-[5rem]">
                Floppa Café
            </li>

            <!-- <div class=" flex flex-col md:flex-row items-center md:gap-[5rem] gap-5">
                <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md">Inicio</li>
                <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md">Catalogo</li>
                <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md">Tipos de Café</li>
            </div> -->

            <div class="flex flex-col md:flex-row items-center md:gap-[2rem] gap-5">
                <a href="auth/register.php">
                    <li class="justify-self-end bg-[#c09061] hover:bg-[#98694d] px-3 py-2 rounded-md hidden md:block" id="navbarBgLi">
                        Registrarse</li>
                </a>

                <a href="auth/login.php">
                    <li class="hidden md:block hover:bg-[#98694d] p-2.5 rounded-md">Iniciar Sesion</li>
                </a>
            </div>
        </ul>
    </nav>

    <div class="bg-[#c09061] hero min-h-screen bg-base-200"
        style="background-image: url(https://i.ytimg.com/vi/DyJTVkRP1vY/maxresdefault.jpg);">
        <div class="hero-overlay bg-opacity-60 brightness-50 bg-black"></div>
        <div class="hero-content flex-col lg:flex-row-reverse">
            <img src="assets/img/logoSinFondo.png" class="max-w-sm" data-aos="fade-right" data-aos-delay="400" />
            <div data-aos="fade-right" data-aos-delay="400">
                <h1 class="md:text-6xl text-5xl font-bold text-zinc-50 md:pt-[5rem]">Floppa Café</h1>
                <p class="py-6 text-zinc-50 text-2xl">Te encanta el café y los gatitos como a nosotros? Registrate y
                    mira las diferentes opciones de bebidas que Floppa Café tiene para ofrecerte.</p>
                <div class="flex gap-5">
                    <a href="auth/register.php">
                        <button
                            class="btn border-none text-zinc-50 text-lg bg-[#c09061] hover:bg-[#98694d]">Registrate</button>
                    </a>

                    <a href="auth/login.php">
                        <button
                            class="btn border- bg-opacity-0 border-none text-zinc-50 text-lg hover:bg-[#98694d]">Iniciar
                            Sesión</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <footer class="footer footer-center p-5 bg-[#c09061] text-primary-content">
        <aside>
            <div class="flex flex-row items-center font-bold text-4xl"><img src="assets/img/logoSinFondo.png"
                    alt="loguito" class="w-[5rem]">
                Floppa Café
            </div>
            <p class="font-bold">
                Marcelo Menjivar (FloppaCoder) <br>Proyecto Personal Fullstack Developer
            </p>
            <p>Copyright © 2024 - Todos los Derechos Reservados</p>
        </aside>
        <nav>
            <div class="grid grid-flow-col gap-4">
                <a href="https://www.youtube.com/channel/UCRfMJ9QqwRhGCCRgkfEhq6g"><i
                        class="fi fi-brands-youtube text-2xl hover:text-zinc-50"></i></a>
                <a href="https://github.com/FloppaCoder"><i
                        class="fi fi-brands-github text-2xl hover:text-zinc-50"></i></a>
            </div>
        </nav>
    </footer>

    <!-- Libreria AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
    </script>

    <!-- Cambiar Nav Segun Scroll -->
    <script>
        document.addEventListener("scroll", function(){
            let navbar = document.getElementById("navbarHomepage");
            let navbarBgLi =document.getElementById("navbarBgLi");

            if (window.scrollY === 0){
                console.log("Scroll en 0");

                navbar.classList.remove("bg-[#c09061]");
                navbar.classList.add("bg-black", "bg-opacity-0");

                navbarBgLi.classList.remove("bg-[#98694d]");
                navbarBgLi.classList.add("bg-[#c09061]");

            } else {
                console.log("Scroll Activado " + window.scrollY);

                navbar.classList.remove("bg-black", "bg-opacity-0");
                navbar.classList.add("bg-[#c09061]");

                navbarBgLi.classList.remove("bg-[#c09061]");
                navbarBgLi.classList.add("bg-[#98694d]", "hover:bg-[#98695d]");
            }
        });
    </script>

</body>

</html>