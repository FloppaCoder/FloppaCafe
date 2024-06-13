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
</head>

<!-- Paleta de Colores (Color Beige/Trigo) -->
<!-- #553d3a	(85,61,58)
          #98694d	(152,105,77)
          #c09061	(192,144,97)
          #e8c48e	(232,196,142)
          #e9dbc6	(233,219,198) -->

<body>
    <nav data-aos="fade-down" class="bg-black bg-opacity-0  fixed top-0 left-0 w-full z-10">
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
                    <li class="justify-self-end bg-[#c09061] hover:bg-[#98694d] px-3 py-2 rounded-md hidden md:block">
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
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
            </div>
        </nav>
    </footer>

    <!-- Libreria AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init();
    </script>

</body>

</html>