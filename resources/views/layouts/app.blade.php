<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="Cache-Control" content="public, max-age=31536000">
        <title>{{ config('app.name') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Artesanos del Código - Podcast, Blog, Servicios, Proyectos. ¿Deseas tener una página web o tienda online para incrementar tus ventas? En Coders Free te brindamos el mejor servicio de diseño y desarrollo web. Contáctanos  ">
        <meta name="meywords" content="Web promocional del Podcast y servicios de programación sobre desarrollo web">

        <meta property="og:type" content="website" />
        <meta property="og:title" content="  {{ config('app.name') }}  " />
        <meta property="og:description" content="Artesanos del Código - Podcast, Blog, Servicios, Proyectos. ¿Deseas tener una página web o tienda online para incrementar tus ventas? En Coders Free te brindamos el mejor servicio de diseño y desarrollo web. Contáctanos  " />
        <meta property="og:url" content="https://artesanosdelcodigo.com" />
        <meta property="og:site_name"  content="  {{ config('app.name') }}  " />

        <meta property="og:image" content="{{ asset('storage/blog/home.jpg') }}" />
        <meta property="og:image" content=@yield('meta_image') />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" onload="this.onload=null;this.media='all';"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous" onload="this.onload=null;this.media='all';">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @include('cookie-consent::index')
        <header id="navbar" class="sticky top-0 bg-secondary shadow z-50 transition duration-300 ease-in-out">

                <div class="flex justify-end space-x-8 p-6">
                    <a href="https://www.facebook.com/profile.php?id=61556931680867" target="_blank" class="text-black hover:text-blue-500 transform hover:scale-125 transition duration-300">
                        <i class="fab fa-facebook fa-1x"></i>
                    </a>
                    <a href="https://www.instagram.com/artesanosdelcodigo/" target="_blank" class="text-black hover:text-blue-500 transform hover:scale-125 transition duration-300">
                        <i class="fab fa-instagram fa-1x"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ivan-portillo-perez/" target="_blank" class="text-black hover:text-blue-500 transform hover:scale-125 transition duration-300">
                        <i class="fab fa-linkedin fa-1x"></i>
                    </a>
                    <a href="https://notasweb.me" target="_blank" class="text-black hover:text-blue-500 transform hover:scale-125 transition duration-300">
                        <i class="fab fa-blogger-b fa-1x"></i>
                    </a>
                    <a href="https://open.spotify.com/show/1TqvkZRtIpTTdEus9i2l7j" target="_blank" class="text-black hover:text-blue-500 transform hover:scale-125 transition duration-300">
                        <i class="fab fa-spotify fa-1x"></i>
                    </a>
                    <a href="https://www.ivoox.com/podcast-artesanos-del-codigo_sq_f12479098_1.html" target="_blank" class="text-black hover:text-blue-500 transform hover:scale-125 transition duration-300">
                        <i class="fas fa-podcast fa-1x"></i>
                    </a>
                </div>
            <div class="container mx-auto flex justify-between items-center p-2">
                <div class="container mx-auto flex justify-between items-center">
                    <h1 class="text-center font-bold leading-tight">
                        <a href="{{ route('home') }}" class="hover:underline">
                            <span class="block text-3xl sm:text-4xl md:text-5xl">Artesanos</span>
                            <span class="block text-xl sm:text-2xl md:text-3xl text-gray-700">Del Código</span>
                        </a>
                    </h1>
                    <livewire:layout.public_navigation />
                    @if (auth()->check())
                        <livewire:layout.navigation />
                    @endif
                </div>
            </div>
        </header>
        <div class="min-h-screen bg-primary text-black/50 dark:text-white/50">
            <!-- Page Content -->
            <main>
                {{ $slot }}

                <livewire:layout.footer />
            </main>

        </div>
        @vite('resources/js/app.js')
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('scripts')
        <script>
            function initializeNavbarScrollEffect() {
                const navbar = document.querySelector("header");
                const menu = document.querySelector("nav");
                if (!navbar) return; // Salir si no existe el navbar en la página actual.

                // Función para manejar el scroll
                function handleScroll() {
                    if (window.scrollY > 50) {
                        navbar.classList.add("bg-white", "text-black", "shadow-md");
                        navbar.classList.remove("bg-secondary");
                        menu.classList.add("bg-white", "text-black", "shadow-md");
                        menu.classList.remove("bg-secondary");
                    } else {
                        navbar.classList.remove("bg-white", "text-black", "shadow-md");
                        navbar.classList.add("bg-secondary");
                        menu.classList.remove("bg-white", "text-black", "shadow-md");
                        menu.classList.add("bg-secondary");
                    }
                }

                handleScroll();
                window.addEventListener("scroll", handleScroll);
            }
            document.addEventListener("DOMContentLoaded", initializeNavbarScrollEffect);
            document.addEventListener("turbo:load", initializeNavbarScrollEffect);
            document.addEventListener("livewire:load", initializeNavbarScrollEffect);
            document.addEventListener("inertia:load", initializeNavbarScrollEffect);

        </script>
        @livewireScripts
    </body>
</html>
